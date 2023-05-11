<?php

namespace App\Services\Application;

use App\Http\Resources\Application\OccasionResource;
use App\Http\Resources\PaginationResource;
use App\Repositories\Eloquent\OccasionRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class OccasionService
{
    use ResponseApi;

    /**
     * ResetPasswordService constructor.
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
     * get all occasions
     *
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
}
