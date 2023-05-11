<?php

namespace App\Http\Controllers\Application\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Auth\ResendVerifyRequest;
use App\Http\Requests\Application\Auth\VerifyRequest;
use App\Services\Application\Auth\EmailVerificationService;
use Illuminate\Http\JsonResponse;

/**
 * @group Auth
 *
 * API endpoints for managing authentication
 */

class EmailVerificationController extends Controller
{

    /**
     * EmailVerificationController constructor.
     *
     * @param EmailVerificationService $emailVerificationService
     */
    public function __construct(protected EmailVerificationService $emailVerificationService)
    {

    }

    /**
     * verify
     *
     * @bodyParam email string required . Example: zahra@gmail.com
     * @bodyParam token int required . Example: 612223
     * @param VerifyRequest $verifyRequest
     * @response 200 {"success": true,"message": "Email Verification Done Successfully!","data": []}
     * @response 422 {"success": false,"message": "The selected email is invalid."}
     * @response 403 {"success": false,"message": "Invalid token!"}
     * @return JsonResponse
     */
    public function verify(VerifyRequest $verifyRequest)
    {
        $data = $verifyRequest->only([
            "email",
            "token"
        ]);
        #send response
        return $this->emailVerificationService->verify($data);
    }

    /**
     * resend verify
     *
     * @bodyParam email string required . Example: zahra@gmail.com
     * @param ResendVerifyRequest $resendVerifyRequest
     * @response 200 {"success": true,"message": "Email Verification Code Created Successfully!","data": []}
     * @response 422 {"success": false,"message": "The selected email is invalid."}
     * @response 403 {"success": false,"message": "Your previous code has not expired!"}
     * @return JsonResponse
     */
    public function resend(ResendVerifyRequest $resendVerifyRequest)
    {
        $data = $resendVerifyRequest->only([
            "email"
        ]);
        #send response
        return $this->emailVerificationService->resend($data);
    }
}
