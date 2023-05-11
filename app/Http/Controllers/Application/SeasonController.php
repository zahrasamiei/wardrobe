<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Services\Application\SeasonService;
use Illuminate\Http\JsonResponse;

class SeasonController extends Controller
{
    /**
     * SeasonController constructor.
     *
     * @param SeasonService $seasonService
     */
    public function __construct(protected SeasonService $seasonService)
    {

    }

    /**
     * season index
     *
     * Display a listing of the resource.
     *
     * @group Outfit
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function outfitIndex()
    {
        return $this->seasonService->index();
    }

    /**
     * season index
     *
     * Display a listing of the resource.
     *
     * @group Closet
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function closetIndex()
    {
        return $this->seasonService->index();
    }

    /**
     * season index by page
     *
     * Display a listing of the resource.
     *
     * @group Closet


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function closetGetByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->seasonService->getByPage($data["page"]);
    }

    /**
     * season index by page
     *
     * Display a listing of the resource.
     *
     * @group Outfit


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function outfitGetByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->seasonService->getByPage($data["page"]);
    }
}
