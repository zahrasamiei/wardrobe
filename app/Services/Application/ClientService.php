<?php

namespace App\Services\Application;

use App\Exceptions\FailException;
use App\Http\Resources\Application\ClientResource;
use App\Http\Resources\PaginationResource;
use App\Repositories\Eloquent\ClientRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class ClientService
{
    use ResponseApi;

    /**
     * ClientService constructor.
     *
     * @param ClientRepository $clientRepository
     * @param UploadService $uploadService
     */
    public function __construct(
        protected ClientRepository $clientRepository,
        protected UploadService $uploadService
    )
    {

    }

    /**
     * create new client
     *
     * @param $data
     * @return JsonResponse
     */
    public function create($data)
    {
        if (!empty($data["avatar"])) {
            $this->uploadService->checkExist($data["avatar"]);
        }

        $data["password"] = Hash::make($data["password"]);
        #add data to database
        return $this->success(
            __("lang.successfullyCreate"),
            new ClientResource($this->clientRepository->create($data))
        );
    }

    /**
     * create new client data
     *
     * @param $data
     * @param $client
     * @return JsonResponse
     */
    public function anatomy($data)
    {
        $client = auth()->user();
        $this->clientRepository->createClientData($data, $client);

        #add data to database
        return $this->success(
            __("lang.successfullyCreate"),
            new ClientResource($this->clientRepository->find(["id" => $client->id])->first())
        );
    }

    /**
     * update client data
     *
     * @param $data
     * @param $client
     * @return JsonResponse
     */
    public function updateAnatomy($data)
    {
        $client = auth()->user();
        $this->clientRepository->updateClientData($data, $client);

        #add data to database
        return $this->success(
            __("lang.successfullyUpdated"),
            new ClientResource($this->clientRepository->find(["id" => $client->id])->first())
        );
    }

    /**
     * create new client
     *
     * @param $data
     * @return JsonResponse
     * @throws FailException
     */
    public function changePassword($data)
    {
        $client = auth()->user();

        if (!$this->clientRepository->checkPassword($data["current_password"], $client)) {
            throw new FailException(
                __("lang.passwordNotCorrect"),
                422
            );
        }

        #add data to database
        return $this->update(["password" => Hash::make($data["password"])]);
    }

    /**
     * show specific client
     *
     * @return JsonResponse
     */
    public function show()
    {
        return $this->success(
            __("lang.successfullyFound"),
            new ClientResource(auth()->user())
        );
    }

    /**
     * update specific client
     *
     * @param $data
     * @return JsonResponse
     * @throws FailException
     */
    public function update($data)
    {
        $client = auth()->user();

        if (isset($data["email"])) {
            checkUnique([
                "id" => $client->id,
                "column" => "email",
                "exist" => $this->clientRepository->find(["email" => $data["email"]])->first()
            ]);
        }

        $this->clientRepository->updateOne($client, $data);
        return $this->success(
            __("lang.successfullyUpdate"),
            new ClientResource(
                $this->clientRepository->find([
                    "id" => $client->id
                ])->first()
            )
        );
    }

    /**
     * update specific client
     *
     * @param $client
     * @return JsonResponse
     */
    public function delete($client)
    {
        $this->clientRepository->delete([
            "id" => $client->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

    /**
     * delete client avatar
     *
     * @param $data
     * @return JsonResponse
     */
    public function deleteAvatar($data)
    {
        $this->uploadService->delete($data["avatar"]);
        return $this->update(["avatar" => ""]);
    }

    /**
     * delete category icn
     *
     * @param $data
     * @return JsonResponse
     */
    public function updateAvatar($data)
    {
        return $this->update($data);
    }

    /**
     * upload avatar
     *
     * @param $data
     * @return JsonResponse
     */
    public function upload($data)
    {
        return $this->uploadService->index($data["avatar"], "clients");
    }

}
