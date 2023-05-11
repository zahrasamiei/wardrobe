<?php

namespace App\Services\Application;

use App\Http\Resources\Application\ColorResource;
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

}
