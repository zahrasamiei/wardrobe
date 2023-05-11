<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Services\Landing\LandingService;
use Illuminate\Http\JsonResponse;

/**
 * @group Pages
 *
 * API endpoints for Manage Landing
 */

class LandingController extends Controller
{

    /**
     * LandingController constructor.
     *
     * @param LandingService $landingService
     */
    public function __construct(protected LandingService $landingService)
    {
    }

    /**
     * about us
     *
     * get about us data
     *
     * @unauthenticated
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function about()
    {
        $category = "about_us";
        return $this->landingService->get(compact('category'));
    }

    /**
     * contact us
     *
     * get contact us data
     *
     * @unauthenticated
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function contact()
    {
        $category = "contact_us";
        return $this->landingService->get(compact('category'));
    }
}
