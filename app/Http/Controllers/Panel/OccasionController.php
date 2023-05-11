<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\PageRequest;
use App\Http\Requests\Panel\Occasion\CreateRequest;
use App\Http\Requests\Panel\Occasion\UpdateRequest;
use App\Http\Requests\IndexSearchRequest;
use App\Models\Occasion;
use App\Services\Panel\OccasionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

/**
 * @group Occasion
 *
 * API endpoints for managing panel
 */

class OccasionController extends Controller
{
    /**
     * OccasionController constructor.
     *
     * @param OccasionService $occasionService
     */
    public function __construct(protected OccasionService $occasionService)
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
        return $this->occasionService->getByPage($data["page"]);
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
        return $this->occasionService->index();
    }

    /**
     * search
     *
     * list occasions with paginate
     *
     * @bodyParam search string The search value for search occasions. Example: search
     * @bodyParam limit int The number of occasions in a page, default is 10. Example: 10
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
        return $this->occasionService->indexSearch($data);
    }

    /**
     * create
     *
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required. Example: party
     * @response 422 {"success":false,"message":"The name field is required."}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 200 {"success":true,"message":"Successfully Created!","data":{"id":1,"name":"party"}}
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function store(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
        ]);
        return $this->occasionService->create($data);
    }

    /**
     * show
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param Occasion $occasion
     * @return JsonResponse
     */
    public function show(Occasion $occasion)
    {
        return $this->occasionService->show($occasion);
    }

    /**
     * update
     *
     * Update the specified resource in storage.
     *
     * @bodyParam name string. Example: parties
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"parties"}}
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 422 {"success":false,"message":"The name field is required"}
     * @param UpdateRequest $updateRequest
     * @param Occasion $occasion
     * @return JsonResponse
     */
    public function update(UpdateRequest $updateRequest, Occasion $occasion)
    {
        $data = $updateRequest->only([
            "name",
        ]);
        return $this->occasionService->update($data, $occasion);
    }

    /**
     * delete
     *
     * Remove the specified resource from storage.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param Occasion $occasion
     * @return JsonResponse
     */
    public function destroy(Occasion $occasion)
    {
        return $this->occasionService->delete($occasion);
    }
}
