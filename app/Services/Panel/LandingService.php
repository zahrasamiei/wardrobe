<?php

namespace App\Services\Panel;

use App\Exceptions\FailException;
use App\Http\Resources\Panel\LandingResource;
use App\Repositories\Eloquent\LandingRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

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
     * update landing
     *
     * @param $data
     * @param $find
     * @return JsonResponse
     * @throws FailException
     */
    public function update($data, $find)
    {
        $this->landingRepository->update([
            "find" => $find,
            "update" => $data
        ]);

        $data = $this->landingRepository->find($find)->first();
        if (empty($data)) {
            throw new FailException(
                __("lang.notFound"),
                404
            );
        }

        return $this->success(
            __("lang.successfullyUpdate"),
            new LandingResource($data)
        );
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
