<?php

namespace App\Services\Application\Auth;

use App\Http\Resources\Application\ClientResource;
use App\Repositories\Eloquent\ClientRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    use ResponseApi;

    /**
     * RegisterService constructor.
     *
     * @param ClientRepository $clientRepository
     */
    public function __construct(protected ClientRepository $clientRepository)
    {

    }

    /**
     * register new client
     *
     * @param $data
     * @return JsonResponse
     */
    public function register($data)
    {
        #crypt password
        $data["password"] = Hash::make($data["password"]);
        #end
        $user = $this->clientRepository->create($data);

        #send response
        return $this->success(
            __("lang.successFullyCreateUser"),
            new ClientResource($user),
        );
        #end

    }
}
