<?php

namespace App\Services\Application\Auth;

use App\Http\Resources\Application\ClientResource;
use App\Traits\ResponseApi;
use App\Repositories\Eloquent\ClientRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function auth;

class LoginService
{
    use ResponseApi;

    /**
     * LoginService constructor.
     *
     * @param ClientRepository $clientRepository
     */
    public function __construct(
        protected ClientRepository $clientRepository,
    )
    {

    }

    /**
     * login client
     *
     * @param $data
     * @return mixed
     */
    public function login($data)
    {
        $attempt = $this->clientRepository->find(["email" => $data["email"]])->first();
        if (!empty($attempt) && Hash::check($data["password"], $attempt["password"])) {
            $result["user"] = new ClientResource($attempt);
            #create token
            $result["token"] = $attempt->createToken("application")->plainTextToken;
            #send response
            return $this->success(
                __("lang.successfullyLogin"),
                $result
            );

        }
        #end

        #send response
        return $this->fail(
            __("lang.errorLogin"),
            401
        );

    }

    /**
     * logout user
     *
     * @return JsonResponse
     */
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return $this->success(
            __("lang.successfullyLogout"),
            []
        );
    }
}
