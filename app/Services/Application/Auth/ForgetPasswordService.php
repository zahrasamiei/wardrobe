<?php

namespace App\Services\Application\Auth;

use App\Exceptions\FailException;
use App\Mail\ResetPasswordMail;
use App\Repositories\Eloquent\ClientRepository;
use App\Repositories\Eloquent\PasswordResetRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordService
{
    use ResponseApi;

    /**
     * ForgetPasswordService constructor.
     *
     * @param PasswordResetRepository $passwordResetRepository
     * @param ClientRepository $clientRepository
     */
    public function __construct(
        protected PasswordResetRepository $passwordResetRepository,
        protected ClientRepository $clientRepository
    )
    {

    }

    /**
     * forget password
     *
     * @param $data
     * @return JsonResponse
     */
    public function forgetPassword($data)
    {
        $email = $data["email"];
        $token = createCode();

        $client = $this->clientRepository->find(compact('email'))->first();
        $client_id = $client->id;

        if (!$this->passwordResetRepository->checkNewRequest($client_id)) {
            throw new FailException(
                __("lang.notExpiredCode"),
                403
            );
        }

        $expired_at = minutesAfterDate(config("configs.expiredRequestMinuteForPasswordReset"));
        $created_at = now();

        $this->passwordResetRepository->create(
            compact(
                'token',
                'client_id',
                'expired_at',
                'created_at'
            )
        );

        $details = [
            'subject' => 'Reset Password Notification',
            'token' => $token,
            'name' => $client->name
        ];

        Mail::to($email)->send(new ResetPasswordMail($details));

        return $this->success(
            __("lang.forgetPasswordSuccess"),
            []
        );
    }
}
