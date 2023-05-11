<?php

namespace App\Services\Panel;

use App\Exceptions\FailException;
use App\Http\Resources\Panel\ColorResource;
use App\Http\Resources\PaginationResource;
use App\Repositories\Eloquent\ColorRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class ColorService
{
    use ResponseApi;

    /**
     * ColorService constructor.
     *
     * @param ColorRepository $colorRepository
     */
    public function __construct(
        protected ColorRepository $colorRepository
    )
    {

    }

    /**
     * get all colors
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->success(
            __("lang.successfullyFound"),
            ColorResource::collection($this->colorRepository->all())
        );
    }

    /**
     * get all colors by page
     *
     * @param $page
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            ColorResource::collection($this->colorRepository->getByPage($page))
        );
    }

    /**
     * create new color
     *
     * @return JsonResponse
     */
    public function create($data)
    {
        return $this->success(
            __("lang.successfullyCreate"),
            new ColorResource($this->colorRepository->create($data))
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
        $data["columns"] = getModelColumns("colors");

        $result = $this->colorRepository->search($data);
        $result["data"] = ColorResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific color
     *
     * @return JsonResponse
     */
    public function show($color)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new ColorResource($color)
        );
    }

    /**
     * update specific color
     *
     * @return JsonResponse
     */
    public function update($data, $color)
    {
        if (isset($data["name"])) {
            checkUnique([
                "id" => $color->id,
                "column" => "name",
                "exist" => $this->colorRepository->find(["name" => $data["name"]])->first()
            ]);
        }

        $this->colorRepository->update([
            "find" => [
                "id" => $color->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new ColorResource(
                $this->colorRepository->find([
                    "id" => $color->id
                ])->first()
            )
        );
    }

    /**
     * update specific color
     *
     * @return JsonResponse
     */
    public function delete($color)
    {
        $this->colorRepository->delete([
            "id" => $color->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

}
