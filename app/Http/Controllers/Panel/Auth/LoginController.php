<?php

namespace App\Http\Controllers\Panel\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\Auth\LoginRequest;
use App\Services\Panel\Auth\LoginService;
use Illuminate\Http\JsonResponse;

/**
 * @group Auth
 *
 * API endpoints for managing panel
 */

class LoginController extends Controller
{

    /**
     * LoginController constructor.
     *
     * @param LoginService $loginService
     */
    public function __construct(protected LoginService $loginService)
    {

    }

    /**
     * login
     *
     * login admin
     *
     * @unauthenticated
     * @bodyParam email string required The admin email. Example: zahra@gmail.com
     * @bodyParam password string required The admin password. Example: password
     * @param LoginRequestl $request
     * @return JsonResponse
     * @response 200 {"success":true,"message":"You Are Successfully Login!","data":{"user":{"id":1,"name":"zahra","email":"zahra@gmail.com"},"token":"4|Dk8Lnd1DUX6n2RqLhbsXuGQBLarKXnJbvnQYGllX"}}
     * @response 422 {"success":false,"message":"The selected email is invalid."}
     * @response 401 {"success":false,"message":"Your Email Or Password Is Incorrect!"}
     */
    public function login(LoginRequest $request)
    {
        #get only needed data
        $data = $request->only([
            'email',
            'password',
        ]);
        #send response
        return $this->loginService->login($data);
    }

    /**
     * logout
     *
     * logout admin
     *
     * @return JsonResponse
     * @response 500 {"success":false,"message":"Route [login] not defined."}
     * @response 200 {"success":true,"message":"Successfully Logout!","data":[]}
     */
    public function logout()
    {
        return $this->loginService->logout();
    }
}
