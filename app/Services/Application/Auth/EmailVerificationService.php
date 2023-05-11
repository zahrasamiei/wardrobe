<?php

namespace App\Services\Application\Auth;

use App\Exceptions\FailException;
use App\Repositories\Eloquent\ClientRepository;
use App\Repositories\Eloquent\EmailVerificationRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

use function checkDateExpired;
use function now;

class EmailVerificationService
{
    use ResponseApi;

    /**
     * EmailVerificationService constructor.
     *
     * @param EmailVerificationRepository $emailVerificationRepository
     * @param ClientRepository $clientRepository
     */
    public function __construct(
        protected EmailVerificationRepository $emailVerificationRepository,
        protected ClientRepository $clientRepository
    )
    {

    }

    /**
     * verify email
     *
     * @param $data
     * @return JsonResponse
     */
    public function verify($data)
    {
        $client = $this->clientRepository->find(["email" => $data["email"]])->first();
        $client_id = $client->id;

        $emailVerify = $this->emailVerificationRepository->find([
            'client_id' => $client_id,
            'token' => $data["token"],
            'is_expired' => 0,
        ])->orderBy("created_at", "desc")->first();

        if(!$emailVerify || checkDateExpired($emailVerify->expired_at)) {
            return $this->fail(
                __("lang.invalidToken"),
            );
        }

        $this->clientRepository->updateOne(
            $client,
            [
                "email_verified_at" => now(),
                "is_email_verified" => 1
            ]
        );
        $this->emailVerificationRepository->delete(compact('client_id'));

        return $this->success(
            __("lang.emailVerifySuccess"),
            []
        );
    }

    /**
     * resend email verification code
     *
     * @param $data
     * @return JsonResponse
     * @throws FailException
     */
    public function resend($data)
    {
        $client = $this->clientRepository->find(["email" => $data["email"]])->first();
        $client_id = $client->id;

        if (!$this->emailVerificationRepository->checkNewRequest($client_id)) {
            throw new FailException(
                __("lang.notExpiredCode"),
                403
            );
        }

        $this->emailVerificationRepository->add($client);

        return $this->success(
            __("lang.emailVerifyCodeSuccess"),
            []
        );
    }
}
