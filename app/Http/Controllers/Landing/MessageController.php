<?php

namespace App\Http\Controllers\Landing;

use App\Exceptions\FailException;
use App\Http\Requests\Landing\Message\CreateRequest;
use App\Http\Requests\Landing\Message\RecentRequest;
use App\Services\Landing\MessageService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

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
     * create contact us
     *
     * store message
     *
     * @group Pages
     * @unauthenticated
     * @bodyParam name string required The name of the user. Example: zahra
     * @bodyParam email string required The email of the user. Example: zahra@gmail.com
     * @bodyParam message string required The message. Example: this is a test message
     * @response 422 {"success": false,"message": "The name field is required.,The email field is required.,The message field is required."}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response {"success":true,"message":"Successfully Created!","data":{"id":2,"name":"zarix1","message":"test","email":"zahrasam@gmail.com","created_at":"2022-07-11 10:13:37"}}
     * @param CreateRequest $createRequest
     * @return JsonResponse
     * @throws FailException
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
     * recent messages
     *
     * get recent messages
     *
     * @group Home
     * @unauthenticated
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function recent(RecentRequest $recentRequest)
    {
        $data = $recentRequest->only([
            "count"
        ]);
        return $this->messageService->recent($data);
    }
}
