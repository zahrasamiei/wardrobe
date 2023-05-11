<?php

namespace App\Http\Controllers\Application\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Auth\ResetPasswordRequest;
use App\Services\Application\Auth\ResetPasswordService;
use Illuminate\Http\JsonResponse;

/**
 * @group Auth
 *
 * API endpoints for managing authentication
 */

class ResetPasswordController extends Controller
{

    /**
     * ResetPasswordController constructor.
     *
     * @param ResetPasswordService $resetPasswordService
     */
    public function __construct(protected ResetPasswordService $resetPasswordService)
    {

    }

    /**
     * reset password
     *
     * @unauthenticated
     * @bodyParam email string required . Example: zahra@gmail.com
     * @bodyParam password string required . Example: password
     * @bodyParam password_confirmation string required . Example: password
     * @bodyParam token int required . Example: 612223
     * @param ResetPasswordRequest $resetPasswordRequest
     * @response 200 {"success": true,"message": "Forget Password Done Successfully!","data": []}
     * @response 422 {"success": false,"message": "The selected email is invalid."}
     * @response 403 {"success": false,"message": "Invalid token!"}
     * @return JsonResponse
     */
    public function resetPassword(ResetPasswordRequest $resetPasswordRequest)
    {
        #get only needed data
        $data = $resetPasswordRequest->only([
            'email',
            'password',
            'password_confirmation',
            'token',
        ]);
        #send response
        return $this->resetPasswordService->resetPassword($data);
    }
}
