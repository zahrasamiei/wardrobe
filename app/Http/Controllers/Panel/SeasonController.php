<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\PageRequest;
use App\Http\Requests\Panel\Season\CreateRequest;
use App\Http\Requests\Panel\Season\UpdateRequest;
use App\Http\Requests\IndexSearchRequest;
use App\Models\Season;
use App\Services\Panel\SeasonService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * @group Season
 *
 * API endpoints for managing panel
 */

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
     * index
     *
     * Display a listing of the resource.
     *
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index()
    {
        return $this->seasonService->index();
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
        return $this->seasonService->getByPage($data["page"]);
    }

    /**
     * search
     *
     * list seasons with paginate
     *
     * @bodyParam search string The search value for search seasons. Example: search
     * @bodyParam limit int The number of seasons in a page, default is 10. Example: 10
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
        return $this->seasonService->indexSearch($data);
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
        return $this->seasonService->create($data);
    }

    /**
     * show
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param Season $season
     * @return JsonResponse
     */
    public function show(Season $season)
    {
        return $this->seasonService->show($season);
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
     * @param Season $season
     * @return JsonResponse
     */
    public function update(UpdateRequest $updateRequest, Season $season)
    {
        $data = $updateRequest->only([
            "name",
        ]);
        return $this->seasonService->update($data, $season);
    }

    /**
     * delete
     *
     * Remove the specified resource from storage.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param Season $season
     * @return JsonResponse
     */
    public function destroy(Season $season)
    {
        return $this->seasonService->delete($season);
    }
}
