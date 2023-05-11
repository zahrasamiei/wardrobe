<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Services\Application\LandingService;
use Illuminate\Http\JsonResponse;

/**
 * @group Profile
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
     * about us content
     *
     * @responseApiResource App\Http\Resource\Application\LandingResource
     * @return JsonResponse
     */
    public function about()
    {
        $category = "about_us";
        return $this->landingService->get(compact('category'));
    }

    /**
     * privacy
     *
     * privacy content
     *
     * @responseApiResource App\Http\Resource\Application\LandingResource
     * @return JsonResponse
     */
    public function privacy()
    {
        $category = "privacy";
        return $this->landingService->get(compact('category'));
    }

    /**
     * license
     *
     * license content
     *
     * @responseApiResource App\Http\Resource\Application\LandingResource
     * @return JsonResponse
     */
    public function license()
    {
        $category = "license";
        return $this->landingService->get(compact('category'));
    }

    /**
     * contact us
     *
     * contact us content
     *
     * @responseApiResource App\Http\Resource\Application\LandingResource
     * @return JsonResponse
     */
    public function contact()
    {
        $category = "contact_us";
        return $this->landingService->get(compact('category'));
    }
}
