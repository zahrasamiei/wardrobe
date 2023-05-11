<?php

namespace App\Services\Panel;

use App\Exceptions\FailException;
use App\Http\Resources\Panel\GetMessageResource;
use App\Http\Resources\Panel\MessageResource;
use App\Http\Resources\PaginationResource;
use App\Mail\ReplyMessageMail;
use App\Repositories\Eloquent\AdminRepository;
use App\Repositories\Eloquent\MessageRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MessageService
{
    use ResponseApi;

    /**
     * MessageService constructor.
     *
     * @param MessageRepository $messageRepository
     * @param AdminRepository $adminRepository
     */
    public function __construct(
        protected MessageRepository $messageRepository,
        protected AdminRepository $adminRepository
    )
    {

    }

    /**
     * get all messages
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->success(
            __("lang.successfullyFound"),
            MessageResource::collection($this->messageRepository->all())
        );
    }

    /**
     * get all messages by page
     *
     * @param $page
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            MessageResource::collection($this->messageRepository->getByPage($page))
        );
    }

    /**
     * create new message
     *
     * @param $data
     * @return JsonResponse
     * @throws FailException
     */
    public function create($data)
    {
        return $this->success(
            __("lang.successfullyCreate"),
            new MessageResource($this->messageRepository->create($data))
        );
    }

    /**
     * show messages with search,paginate and sort
     *
     * @param $data
     * @return JsonResponse
     */
    public function indexSearch($data)
    {
        $data["limit"] = $data["limit"] ?? config("configs.limit");
        $data["page"] = $data["page"] ?? config("configs.page");
        $data["orderDir"] = $data["orderDir"] ?? config("configs.orderDir");
        $data["orderColumn"] = $data["orderColumn"] ?? config("configs.orderColumn");
        $data["search"] = $data["search"] ?? "";
        $data["columns"] = getModelColumns("messages");

        $result = $this->messageRepository->search($data);
        $result["data"] = MessageResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific message
     *
     * @param $message
     * @return JsonResponse
     */
    public function show($message)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new MessageResource($message)
        );
    }

    /**
     * update specific message
     *
     * @param $data
     * @param $message
     * @return JsonResponse
     * @throws FailException
     */
    public function update($data, $message)
    {
        if (isset($data["reply_id"]) && isset($this->messageRepository->find(["id" => $data["reply_id"]])->first()->reply_id)) {
            throw new FailException(
                __("lang.forbidden"),
                422
            );
        }

        $this->messageRepository->update([
            "find" => [
                "id" => $message->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new MessageResource(
                $this->messageRepository->find([
                    "id" => $message->id
                ])->first()
            )
        );
    }

    /**
     * reply for a comment
     *
     * @param $data
     * @param $message
     * @return JsonResponse
     * @throws FailException
     */
    public function reply($data, $message)
    {
        $admin_id = auth()->user()->id;

        #only can add one reply for per message
        if ($message->reply_id != 0) {
            throw new FailException(
                __("lang.duplicateReplyComment"),
                422
            );
        }

        if ($message->admin_id != 0) {
            throw new FailException(
                __("lang.forbidden"),
                422
            );
        }
        #end

        $adminData = $this->adminRepository->find(["id" => $admin_id])->first();

        try {
            DB::beginTransaction();

            #add reply
            $replyData = $this->messageRepository->create([
                "name" => $adminData->name,
                "email" => $adminData->email,
                "admin_id" => $admin_id,
                "message" =>$data["message"],
            ]);
            #end

            #send mail to client
            Mail::to($message->email)->send(new ReplyMessageMail([
                "subject" => __("lang.replyComment"),
                "name" => $message->name
            ]));

            $updateData = [
                "reply_id" => $replyData->id
            ];

            #if mail send, update reply_email_sent
            if (!Mail::flushMacros()) {
                $updateData["reply_email_sent"] = 1;
            }

            #update parent message
            $this->messageRepository->update([
                "find" => [
                    "id" => $message->id
                ],
                "update" => $updateData
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new FailException(
                $e->getMessage(),
                "500"
            );
        }

        #return response
        return $this->success(
            __("lang.successfullyFound"),
            new MessageResource(
                $this->messageRepository->find(["id" => $message->id])->first()
            )
        );
    }

    /**
     * update specific message
     *
     * @return JsonResponse
     */
    public function delete($message)
    {
        $this->messageRepository->delete([
            "id" => $message->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

    /**
     * get recent messages
     *
     * @return JsonResponse
     */
    public function recent()
    {
        return $this->success(
            __("lang.successfullyFound"),
            MessageResource::collection($this->messageRepository->getToday()->get())
        );
    }

    /**
     * get recent messages by page
     *
     * @param $page
     * @return JsonResponse
     */
    public function recentByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            MessageResource::collection($this->messageRepository->getToday()->paginate(10, ['*'], 'page', $page))
        );
    }

    /**
     * get messages byDate
     *
     * @param $data
     * @return JsonResponse
     */
    public function byDate($data)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new GetMessageResource($this->messageRepository->groupbyCreatedAt($data["count"] ?? null))
        );
    }

}
