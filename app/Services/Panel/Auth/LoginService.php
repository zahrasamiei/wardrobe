<?php

namespace App\Services\Panel\Auth;

use App\Http\Resources\Panel\AdminResource;
use App\Repositories\Eloquent\AdminRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    use ResponseApi;

    /**
     * LoginService constructor.
     *
     * @param AdminRepository $adminRepository
     */
    public function __construct(
        protected AdminRepository $adminRepository,
    )
    {

    }

    /**
     * login admin
     *
     * @param $data
     * @return mixed
     */
    public function login($data)
    {
        $attempt = $this->adminRepository->find(["email" => $data["email"]])->first();
        if (!empty($attempt) && Hash::check($data["password"], $attempt["password"])) {
            $result["user"] = new AdminResource($attempt);
            #create token
            $result["token"] = $attempt->createToken("panel")->plainTextToken;
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
     * logout admin
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
