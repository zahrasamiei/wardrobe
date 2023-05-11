<?php

namespace App\Services\Application;

use App\Http\Resources\PaginationResource;
use App\Http\Resources\Application\SeasonResource;
use App\Repositories\Eloquent\SeasonRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class SeasonService
{
    use ResponseApi;

    /**
     * SeasonService constructor.
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
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            SeasonResource::collection($this->seasonRepository->getByPage($page))
        );
    }

}
