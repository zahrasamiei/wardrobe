<?php

namespace App\Services\Panel;

use App\Http\Resources\Panel\GenderResource;
use App\Http\Resources\PaginationResource;
use App\Repositories\Eloquent\GenderRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class GenderService
{
    use ResponseApi;

    /**
     * ResetPasswordService constructor.
     *
     * @param GenderRepository $genderRepository
     */
    public function __construct(
        protected GenderRepository $genderRepository
    )
    {

    }

    /**
     * get all genders
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->success(
            __("lang.successfullyFound"),
            GenderResource::collection($this->genderRepository->all())
        );
    }

    /**
     * get all genders by page
     *
     * @param $page
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            GenderResource::collection($this->genderRepository->getByPage($page))
        );
    }

    /**
     * create new gender
     *
     * @return JsonResponse
     */
    public function create($data)
    {
        return $this->success(
            __("lang.successfullyCreate"),
            new GenderResource($this->genderRepository->create($data))
        );
    }

    /**
     * show genders with search,paginate and sort
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
        $data["columns"] = getModelColumns("genders");

        $result = $this->genderRepository->search($data);
        $result["data"] = GenderResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific gender
     *
     * @return JsonResponse
     */
    public function show($gender)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new GenderResource($gender)
        );
    }

    /**
     * update specific gender
     *
     * @return JsonResponse
     */
    public function update($data, $gender)
    {
        if (isset($data["name"])) {
            checkUnique([
                "id" => $gender->id,
                "column" => "name",
                "exist" => $this->genderRepository->find(["name" => $data["name"]])->first()
            ]);
        }

        $this->genderRepository->update([
            "find" => [
                "id" => $gender->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new GenderResource(
                $this->genderRepository->find([
                    "id" => $gender->id
                ])->first()
            )
        );
    }

    /**
     * update specific gender
     *
     * @return JsonResponse
     */
    public function delete($gender)
    {
        $this->genderRepository->delete([
            "id" => $gender->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

}
