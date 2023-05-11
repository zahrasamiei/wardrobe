<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Services\Application\GenderService;
use Illuminate\Http\JsonResponse;

/**
 * @group Profile
 *
 * API endpoints for managing panel
 */

class GenderController extends Controller
{

    /**
     * GenderController constructor.
     *
     * @param GenderService $genderService
     */
    public function __construct(protected GenderService $genderService)
    {

    }

    /**
     * gender index
     *
     * Display a listing of the resource.
     *
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index()
    {
        return $this->genderService->index();
    }

    /**
     * gender index by page
     *
     * Display a listing of the resource.
     *


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function getByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->genderService->getByPage($data["page"]);
    }
}
