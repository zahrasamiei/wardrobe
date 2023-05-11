<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Color\CreateRequest;
use App\Http\Requests\PageRequest;
use App\Services\Application\ColorService;
use Illuminate\Http\JsonResponse;

/**
 * @group Closet
 *
 * api for managing application
 */

class ColorController extends Controller
{

    /**
     * ColorController constructor.
     *
     * @param ColorService $colorService
     */
    public function __construct(protected ColorService $colorService)
    {

    }

    /**
     * colors all
     *
     * Display a listing of the resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index()
    {
        return $this->colorService->index();
    }

    /**
     * colors all by page
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
        return $this->colorService->getByPage($data["page"]);
    }

    /**
     * color create
     *
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required. Example: black
     * @bodyParam code string required. Example: #000
     * @response 422 {"success":false,"message":"The name field is required.,The code field is required."}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 200 {"success":true,"message":"Successfully Created!","data":{"id":1,"name":"black","code":"#000"}}
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function store(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
            "code"
        ]);
        return $this->colorService->create($data);
    }
}
