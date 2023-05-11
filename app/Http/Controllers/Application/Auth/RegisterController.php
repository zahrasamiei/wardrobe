<?php

namespace App\Http\Controllers\Application\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Auth\RegisterRequest;
use App\Services\Application\Auth\RegisterService;
use Illuminate\Http\JsonResponse;

/**
 * @group Auth
 *
 * API endpoints for managing application
 */

class RegisterController extends Controller
{
    /**
     * RegisterController constructor.
     *
     * @param RegisterService $registerService
     */
    public function __construct(protected RegisterService $registerService)
    {

    }

    /**
     * register
     *
     * register new client
     *
     * @unauthenticated
     * @param RegisterRequest $request
     * @bodyParam name string required. Example: zahra
     * @bodyParam email string required . Example: zahra@gmail.com
     * @bodyParam password string required . Example: password
     * @bodyParam password_confirmation string required . Example: password
     * @response 200 {"success": true,"message": "Create User Done Successfully!","data": [{"id": 1,"name": "zahra","email": "zahra@gmail.com"}]}
     * @response 422 {"success": false,"message": "The email has already been taken."}
     * @return JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        #get only needed data
        $data = $request->only([
            'name',
            'email',
            'password'
        ]);
        #send response
        return $this->registerService->register($data);
    }
}
