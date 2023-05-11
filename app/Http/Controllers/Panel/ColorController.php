<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\PageRequest;
use App\Http\Requests\Panel\Color\CreateRequest;
use App\Http\Requests\Panel\Color\UpdateRequest;
use App\Http\Requests\IndexSearchRequest;
use App\Models\Color;
use App\Services\Panel\ColorService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

/**
 * @group Color
 *
 * API endpoints for managing panel
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
     * index by page
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
     * index
     *
     * Display a listing of the resource.
     *
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index()
    {
        return $this->colorService->index();
    }

    /**
     * search
     *
     * list colors with paginate
     *
     * @bodyParam search string The search value for search colors. Example: search
     * @bodyParam limit int The number of colors in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: name
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @response 422 {"success":false,"message":"The limit must be greater than 0.,The page must be greater than 0.,order column Column Not Found."}
     * @response 200 {"success":true,"message":"Successfully Founded!","data":{"total":0,"perPage":10,"page":0,"previousPage":0,"nextPage":null,"lastPage":0,"result":[]}}
     * @param IndexSearchRequest $indexSearchRequest
     * @return JsonResponse
     */
    public function indexSearch(IndexSearchRequest $indexSearchRequest)
    {
        $data = $indexSearchRequest->only([
            "search",
            "limit",
            "page",
            "orderColumn",
            "orderDir",
        ]);
        return $this->colorService->indexSearch($data);
    }

    /**
     * create
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

    /**
     * show
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param Color $color
     * @return JsonResponse
     */
    public function show(Color $color)
    {
        return $this->colorService->show($color);
    }

    /**
     * update
     *
     * Update the specified resource in storage.
     *
     * @bodyParam name string. Example: green
     * @bodyParam code string. Example: #fff
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"green","code":"#fff"}}
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 422 {"success":false,"message":"The name field is required when code is not present."}
     * @param UpdateRequest $updateRequest
     * @param Color $color
     * @return JsonResponse
     */
    public function update(UpdateRequest $updateRequest, Color $color)
    {
        $data = $updateRequest->only([
            "name",
            "code"
        ]);
        return $this->colorService->update($data, $color);
    }

    /**
     * delete
     *
     * Remove the specified resource from storage.
     *
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param Color $color
     * @return JsonResponse
     */
    public function destroy(Color $color)
    {
        return $this->colorService->delete($color);
    }
}
