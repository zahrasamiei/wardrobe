<?php

namespace App\Services\Application;

use App\Http\Resources\Application\LandingResource;
use App\Repositories\Eloquent\LandingRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class LandingService
{
    use ResponseApi;

    /**
     * LandingService constructor.
     *
     * @param LandingRepository $landingRepository
     */
    public function __construct(
        protected LandingRepository $landingRepository
    )
    {
    }

    /**
     * get all landings
     *
     * @return JsonResponse
     */
    public function get($find)
    {
        return $this->success(
            __("lang.successfullyFound"),
            LandingResource::collection($this->landingRepository->find($find)->get())
        );
    }
}
