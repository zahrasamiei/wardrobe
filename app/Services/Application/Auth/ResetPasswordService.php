<?php

namespace App\Services\Application\Auth;

use App\Repositories\Eloquent\ClientRepository;
use App\Repositories\Eloquent\PasswordResetRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class ResetPasswordService
{
    use ResponseApi;

    /**
     * ResetPasswordService constructor.
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
     * reset password
     *
     * @param $data
     * @return JsonResponse
     */
    public function resetPassword($data)
    {
        $email = $data["email"];
        $client = $this->clientRepository->find(compact('email'))->first();
        $client_id = $client->id;

        $updatePassword = $this->passwordResetRepository->find([
            'client_id' => $client_id,
            'token' => $data["token"],
            'is_expired' => 0,
        ])->orderBy("created_at", "desc")->first();

        if(!$updatePassword || checkDateExpired($updatePassword->expired_at)) {
            return $this->fail(
                __("lang.invalidToken"),
            );
        }

        $this->clientRepository->update([
            "find" => compact('email'),
            "update" => [
                'password' => bcrypt($data["password"])
            ]
        ]);
        $this->passwordResetRepository->delete(compact('client_id'));

        return $this->success(
            __("lang.forgetPasswordSuccess"),
            []
        );
    }
}
