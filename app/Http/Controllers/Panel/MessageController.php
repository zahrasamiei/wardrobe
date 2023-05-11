<?php

namespace App\Http\Controllers\Panel;

use App\Exceptions\FailException;
use App\Http\Requests\PageRequest;
use App\Http\Requests\Panel\Message\CreateRequest;
use App\Http\Requests\Panel\Message\GetByDateRequest;
use App\Http\Requests\Panel\Message\ReplyRequest;
use App\Http\Requests\Panel\Message\SearchRequest;
use App\Http\Requests\Panel\Message\UpdateRequest;
use App\Models\Message;
use App\Services\Panel\MessageService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * @group Message
 *
 * API endpoints for managing panel
 */

class MessageController extends Controller
{

    /**
     * MessageController constructor.
     *
     * @param MessageService $messageService
     */
    public function __construct(protected MessageService $messageService)
    {

    }

    /**
     * index
     *
     * Display a listing of the resource.
     *
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index()
    {
        return $this->messageService->index();
    }

    /**
     * create
     *
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required The name of the user. Example: zahra
     * @bodyParam email string required The email of the user. Example: zahra@gmail.com
     * @bodyParam message string required The message. Example: this is a test message
     * @response 422 {"success": false,"message": "The name field is required.,The email field is required.,The message field is required."}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response {"success":true,"message":"Successfully Created!","data":{"id":2,"name":"zarix1","message":"test","email":"zahrasam@gmail.com","created_at":"2022-07-11 10:13:37"}}

     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function store(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
            "email",
            "message",
        ]);
        return $this->messageService->create($data);
    }

    /**
     * search
     *
     * list messages with paginate
     *
     * @bodyParam search string The search value for search messages. Example: search
     * @bodyParam limit int The number of messages in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: name
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @bodyParam name string The exact name of the user. Example: zahra
     * @bodyParam email string The exact email of the user. Example: zahra@gmail.com
     * @bodyParam message string The exact message. Example: this is a test message
     * @response 422 {"success":false,"message":"The limit must be greater than 0.,The page must be greater than 0.,order column Column Not Found."}
     * @response 200 {"success":true,"message":"Successfully Founded!","data":{"total":0,"perPage":10,"page":0,"previousPage":0,"nextPage":null,"lastPage":0,"result":[]}}
     * @param SearchRequest $searchRequest
     * @return JsonResponse
     */
    public function indexSearch(SearchRequest $searchRequest)
    {
        $data = $searchRequest->only([
            "search",
            "limit",
            "page",
            "orderColumn",
            "orderDir",
            "email",
            "name",
            "message",
        ]);
        return $this->messageService->indexSearch($data);
    }

    /**
     * all by page
     *
     * Display a listing of the resource.
     *


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function getByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->messageService->getByPage($data["page"]);
    }

    /**
     * reply
     *
     * add reply for a message
     *
     * @bodyParam message required string The message. Example: this is a test message.
     * @response 200 {"success":true,"message":"Successfully Founded!","data":{"id":1,"name":"zarix","message":"dsd","email":"zzz@gmail.com","admin_id":0,"reply_id":5,"reply_email_sent":1,"reply":{"id":5,"name":"zahra","message":"zarix","email":"zahra@gmail.com","admin_id":1,"reply_id":0,"reply_email_sent":0,"created_at":"2022-07-11 12:22:48"},"created_at":"2022-07-11 12:22:53"}}
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param ReplyRequest $replyRequest
     * @param Message $message
     * @return JsonResponse
     * @throws FailException
     */
    public function reply(ReplyRequest $replyRequest, Message $message)
    {
        $data = $replyRequest->only([
            "message",
        ]);
        return $this->messageService->reply($data, $message);
    }

    /**
     * show
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param Message $message
     * @return JsonResponse
     */
    public function show(Message $message)
    {
        return $this->messageService->show($message);
    }

    /**
     * update
     *
     * Update the specified resource in storage.
     *
     * @bodyParam name string The message owner name. Example: zahra
     * @bodyParam email string The message owner email. Example: zahra@gmail.com
     * @bodyParam message string The message. Example: this is a test message.
     * @bodyParam reply_id int The message reply id. Example: 1.
     * @bodyParam admin_id int The message reply admin id. Example: 1.
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"zarix","message":"dsd","email":"zzz","admin_id":0,"reply_id":0,"reply_email_sent":0,"created_at":"2022-07-11 11:41:03"}}
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param UpdateRequest $updateRequest
     * @param Message $message
     * @return JsonResponse
     */
    public function update(UpdateRequest $updateRequest, Message $message)
    {
        $data = $updateRequest->only([
            "name",
            "email",
            "message",
            "reply_id",
            "admin_id",
        ]);
        return $this->messageService->update($data, $message);
    }

    /**
     * delete
     *
     * Remove the specified resource from storage.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param Message $message
     * @return JsonResponse
     */
    public function destroy(Message $message)
    {
        return $this->messageService->delete($message);
    }

    /**
     * recent
     *
     * get today messages
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function recent()
    {
        return $this->messageService->recent();
    }

    /**
     * recent by page
     *
     * get today messages
     *


     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function recentByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->messageService->recentByPage($data["page"]);
    }

    /**
     * by date
     *
     * get messages by date
     *
     * @bodyParam count int The number of data, if you don't send it,it returns all.Example: 1
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function byDate(GetByDateRequest $getByDateRequest)
    {
        $data = $getByDateRequest->only([
            "count"
        ]);
        return $this->messageService->byDate($data);
    }

}
