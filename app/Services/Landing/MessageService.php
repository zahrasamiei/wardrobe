<?php

namespace App\Services\Landing;

use App\Exceptions\FailException;
use App\Http\Resources\Landing\MessageResource;
use App\Repositories\Eloquent\MessageRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class MessageService
{
    use ResponseApi;

    /**
     * ResetPasswordService constructor.
     *
     * @param MessageRepository $messageRepository
     */
    public function __construct(
        protected MessageRepository $messageRepository,
    )
    {
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
     * get recent messages
     *
     * @param $count
     * @return JsonResponse
     */
    public function recent($count)
    {
        if($count <= 0) {
            throw new FailException(
                __("invalidCount"),
                422
            );
        }
        return $this->success(
            __("lang.successfullyFound"),
            MessageResource::collection($this->messageRepository->recent($count, ["admin_id" => ""]))
        );
    }
}
