<?php

namespace App\Services\Panel;

use App\Exceptions\FailException;
use App\Http\Resources\Panel\ClientResource;
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
     * get all clients
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->success(
            __("lang.successfullyFound"),
            ClientResource::collection($this->clientRepository->all())
        );
    }

    /**
     * get all clients by page
     *
     * @param $page
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            ClientResource::collection($this->clientRepository->getByPage($page))
        );
    }

    /**
     * show clients with search,paginate and sort
     *
     * @return JsonResponse
     */
    public function indexSearch($data)
    {
        $data["limit"] = $data["limit"] ?? config("configs.limit");
        $data["page"] = $data["page"] ?? config("configs.page");
        $data["orderDir"] = $data["orderDir"] ?? config("configs.orderDir");
        $data["orderColumn"] = $data["orderColumn"] ?? config("configs.orderColumn");
        $data["search"] = $data["search"] ?? "";
        $data["columns"] = getModelColumns("clients");

        if (isset($data["dateFrom"]) && !isset($data["dateTo"])) {
            $data["dateTo"] = date("Y-m-d H:i:s");
        }

        if (isset($data["gender_id"])) {
            $data["relations"][] = [
                "table" => "clientData",
                "key" => "gender_id",
                "value" => $data["gender_id"]
            ];
        }

        if (isset($data["dateTo"]) && !isset($data["dateFrom"])) {
            $data["dateFrom"] = dayAfterDate(-1, $data["dateTo"]);
        }

        if (isset($data["dateTo"]) && isset($data["dateFrom"])) {
            $data["created_at"] = [
                "value" => [$data["dateFrom"], $data["dateTo"]],
                "operation" => "BETWEEN"
            ];

            unset($data["dateTo"]);
            unset($data["dateFrom"]);
        }

        $result = $this->clientRepository->search($data);
        $result["data"] = ClientResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
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
        $data["email_verified_at"] = date("Y-m-d H:i:s");
        $data["is_email_verified"] = 1;

        #add data to database
        return $this->success(
            __("lang.successfullyCreate"),
            new ClientResource($this->clientRepository->createClient($data))
        );
    }

    /**
     * show specific client
     *
     * @param $client
     * @return JsonResponse
     */
    public function show($client)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new ClientResource($client)
        );
    }

    /**
     * update specific client
     *
     * @param $data
     * @param $client
     * @return JsonResponse
     * @throws FailException
     */
    public function update($data, $client)
    {
        if (isset($data["email"])) {
            checkUnique([
                "id" => $client->id,
                "column" => "email",
                "exist" => $this->clientRepository->find(["email" => $data["email"]])->first()
            ]);
        }

        $data["email_verified_at"] = date("Y-m-d H:i:s");
        $data["is_email_verified"] = 1;

        $this->clientRepository->updateClient($data, $client);

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
     * delete specific client
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
     * delete avatar
     *
     * @param $data
     * @return JsonResponse
     */
    public function deleteAvatar($data)
    {
        $this->uploadService->delete($data["avatar"]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

    /**
     * update client avatar
     *
     * @param $data
     * @return JsonResponse
     */
    public function updateAvatar($data, $client)
    {
        return $this->update($data, $client);
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
