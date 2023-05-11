<?php

namespace App\Services\Panel;

use App\Http\Resources\Panel\OccasionResource;
use App\Http\Resources\PaginationResource;
use App\Repositories\Eloquent\OccasionRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class OccasionService
{
    use ResponseApi;

    /**
     * OccasionService constructor.
     *
     * @param OccasionRepository $occasionRepository
     */
    public function __construct(
        protected OccasionRepository $occasionRepository
    )
    {

    }

    /**
     * get all occasions
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->success(
            __("lang.successfullyFound"),
            OccasionResource::collection($this->occasionRepository->all())
        );
    }

    /**
     * get all occasions by page
     *
     * @param $page
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            OccasionResource::collection($this->occasionRepository->getByPage($page))
        );
    }

    /**
     * create new occasion
     *
     * @return JsonResponse
     */
    public function create($data)
    {
        return $this->success(
            __("lang.successfullyCreate"),
            new OccasionResource($this->occasionRepository->create($data))
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
        $data["columns"] = getModelColumns("occasions");

        $result = $this->occasionRepository->search($data);
        $result["data"] = OccasionResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific occasion
     *
     * @return JsonResponse
     */
    public function show($occasion)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new OccasionResource($occasion)
        );
    }

    /**
     * update specific occasion
     *
     * @return JsonResponse
     */
    public function update($data, $occasion)
    {
        if (isset($data["name"])) {
            checkUnique([
                "id" => $occasion->id,
                "column" => "name",
                "exist" => $this->occasionRepository->find(["name" => $data["name"]])->first()
            ]);
        }

        $this->occasionRepository->update([
            "find" => [
                "id" => $occasion->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new OccasionResource(
                $this->occasionRepository->find([
                    "id" => $occasion->id
                ])->first()
            )
        );
    }

    /**
     * update specific occasion
     *
     * @return JsonResponse
     */
    public function delete($occasion)
    {
        $this->occasionRepository->delete([
            "id" => $occasion->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

}
