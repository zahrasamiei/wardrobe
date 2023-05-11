<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Services\Panel\LandingService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Panel\Landing\UpdateRequest;

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
     * update about us
     *
     * update about us content
     *
     * @bodyParam text string required The about us content.Example: test content
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"key":"about us","title":"about us","subtitle":"about us","text":"about content","category":"about_us","link":"about us","image":null}}
     * @response 422 {"success":false,"message":"The text field is required."}
     * @return JsonResponse
     */
    public function about(UpdateRequest $updateRequest)
    {
        $data = $updateRequest->only("text");
        $category = "about_us";
        return $this->landingService->update($data, compact('category'));
    }

    /**
     * update contact us
     *
     * update contact us content
     *
     * @bodyParam text string required The contact us content.Example: test content
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"key":"contact us","title":"contact us","subtitle":"contact us","text":"test content","category":"contact_us","link":"contact us","image":null}}
     * @response 422 {"success":false,"message":"The text field is required."}
     * @return JsonResponse
     */
    public function contact(UpdateRequest $updateRequest)
    {
        $data = $updateRequest->only("text");
        $category = "contact_us";
        return $this->landingService->update($data, compact('category'));
    }

    /**
     * update download
     *
     * update download content
     *
     * @bodyParam text string required The contact us content.Example: test content
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"key":"contact us","title":"contact us","subtitle":"contact us","text":"test content","category":"contact_us","link":"contact us","image":null}}
     * @response 422 {"success":false,"message":"The text field is required."}
     * @return JsonResponse
     */
    public function download(UpdateRequest $updateRequest)
    {
        $data = $updateRequest->only("text");
        $category = "download";
        return $this->landingService->update($data, compact('category'));
    }

    /**
     * about us
     *
     * get about us data
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function about_us()
    {
        $category = "about_us";
        return $this->landingService->get(compact('category'));
    }

    /**
     * download
     *
     * get download data
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function downloadShow()
    {
        $category = "download";
        return $this->landingService->get(compact('category'));
    }

    /**
     * contact us
     *
     * get contact us data
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function contact_us()
    {
        $category = "contact_us";
        return $this->landingService->get(compact('category'));
    }
}
