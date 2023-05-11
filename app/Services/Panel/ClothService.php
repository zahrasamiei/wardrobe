<?php

namespace App\Services\Panel;

use App\Exceptions\FailException;
use App\Http\Resources\Panel\ClothResource;
use App\Http\Resources\PaginationResource;
use App\Repositories\Eloquent\ClothRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class ClothService
{
    use ResponseApi;

    /**
     * ClothService constructor.
     *
     * @param ClothRepository $clothRepository
     */
    public function __construct(
        protected ClothRepository $clothRepository,
    )
    {

    }

    /**
     * get all cloths for a client
     *
     * @return JsonResponse
     */
    public function index($client_id)
    {
        return $this->success(
            __("lang.successfullyFound"),
            ClothResource::collection($this->clothRepository->find(compact('client_id'))->get())
        );
    }

    /**
     * get all cloths for a client by page
     *
     * @param $page
     * @return JsonResponse
     */
    public function getByPage($client_id, $page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            ClothResource::collection($this->clothRepository->getByPage($page, compact('client_id')))
        );
    }


    /**
     * show clothes with search,paginate and sort
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
        $data["columns"] = getModelColumns("clothes");

        $result = $this->clothRepository->search($data);
        $result["data"] = ClothResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific cloth
     *
     * @param $cloth
     * @param $client_id
     * @return JsonResponse
     * @throws FailException
     */
    public function show($cloth, $client_id)
    {
        if ($cloth->client_id != $client_id) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        return $this->success(
            __("lang.successfullyFound"),
            new ClothResource($cloth)
        );
    }

}
