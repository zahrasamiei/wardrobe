<?php

namespace App\Http\Controllers\Application\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Auth\ForgetPasswordRequest;
use App\Services\Application\Auth\ForgetPasswordService;
use Illuminate\Http\JsonResponse;

/**
 * @group Auth
 *
 * API endpoints for managing authentication
 */

class ForgetPasswordController extends Controller
{

    /**
     * ForgetPasswordController constructor.
     *
     * @param ForgetPasswordService $forgetPasswordService
     */
    public function __construct(protected ForgetPasswordService $forgetPasswordService)
    {

    }

    /**
     * forget password
     *
     * @unauthenticated
     * @bodyParam email string required . Example: zahra@gmail.com
     * @param ForgetPasswordRequest $forgetPasswordRequest
     * @response 200 {"success": true,"message": "Forget Password Done Successfully!","data": []}
     * @response 422 {"success": false,"message": "The selected email is invalid."}
     * @response 403 {"success": false,"message": "Your previous code has not expired!"}
     * @return JsonResponse
     */
    public function forgetPassword(ForgetPasswordRequest $forgetPasswordRequest)
    {
        #get only needed data
        $data = $forgetPasswordRequest->only([
            'email',
        ]);
        #send response
        return $this->forgetPasswordService->forgetPassword($data);
    }
}
