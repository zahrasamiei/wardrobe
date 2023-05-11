<?php

namespace App\Services\Application;

use App\Http\Resources\Application\GenderResource;
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
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            GenderResource::collection($this->genderRepository->getByPage($page))
        );
    }
}
