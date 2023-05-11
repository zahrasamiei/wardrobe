<?php

namespace App\Http\Controllers\Application\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Auth\LoginRequest;
use App\Services\Application\Auth\LoginService;
use Illuminate\Http\JsonResponse;

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
     * login client
     *
     * @group Auth
     * @unauthenticated
     * @bodyParam email string required The client email. Example: zahra@gmail.com
     * @bodyParam password string required The client password. Example: password
     * @param LoginRequest $request
     * @return JsonResponse
     * @response 200 {"success":true,"message":"You Are Successfully Login!","data":{"user":{"id":1,"name":"zahra","email":"zahra@gmail.com"},"token":"5|h1tfC94ayZ89HV1ZB0PQMtZ7vuewBy4wIIZVDG19"}}
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
     * logout client
     *
     * @group Profile
     * @return JsonResponse
     * @response 500 {"success":false,"message":"Route [login] not defined."}
     * @response 200 {"success":true,"message":"Successfully Logout!","data":[]}
     */
    public function logout()
    {
        return $this->loginService->logout();
    }
}
