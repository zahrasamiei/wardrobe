<?php

namespace App\Services\Panel;

use App\Http\Resources\PaginationResource;
use App\Http\Resources\Panel\SeasonResource;
use App\Repositories\Eloquent\SeasonRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class SeasonService
{
    use ResponseApi;

    /**
     * CategoryService constructor.
     *
     * @param SeasonRepository $seasonRepository
     */
    public function __construct(
        protected SeasonRepository $seasonRepository
    )
    {

    }

    /**
     * get all seasons
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->success(
            __("lang.successfullyFound"),
            SeasonResource::collection($this->seasonRepository->all())
        );
    }

    /**
     * get all seasons by page
     *
     * @param $page
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            SeasonResource::collection($this->seasonRepository->getByPage($page))
        );
    }

    /**
     * create new season
     *
     * @return JsonResponse
     */
    public function create($data)
    {
        return $this->success(
            __("lang.successfullyCreate"),
            new SeasonResource($this->seasonRepository->create($data))
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
        $data["columns"] = getModelColumns("seasons");

        $result = $this->seasonRepository->search($data);
        $result["data"] = SeasonResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific season
     *
     * @return JsonResponse
     */
    public function show($season)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new SeasonResource($season)
        );
    }

    /**
     * update specific season
     *
     * @return JsonResponse
     */
    public function update($data, $season)
    {
        if (isset($data["name"])) {
            checkUnique([
                "id" => $season->id,
                "column" => "name",
                "exist" => $this->seasonRepository->find(["name" => $data["name"]])->first()
            ]);
        }

        $this->seasonRepository->update([
            "find" => [
                "id" => $season->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new SeasonResource(
                $this->seasonRepository->find([
                    "id" => $season->id
                ])->first()
            )
        );
    }

    /**
     * update specific season
     *
     * @return JsonResponse
     */
    public function delete($season)
    {
        $this->seasonRepository->delete([
            "id" => $season->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

}
