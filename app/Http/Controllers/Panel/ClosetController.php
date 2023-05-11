<?php

namespace App\Http\Controllers\Panel;

use App\Exceptions\FailException;
use App\Http\Requests\IndexSearchRequest;
use App\Http\Requests\PageRequest;
use App\Models\Client;
use App\Models\Cloth;
use App\Services\Panel\ClothService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * @group Client
 *
 * API endpoints for managing panel
 */

class ClosetController extends Controller
{

    /**
     * ClosetController constructor.
     *
     * @param ClothService $closetService
     */
    public function __construct(protected ClothService $closetService)
    {

    }

    /**
     * index closets
     *
     * Display a listing of the resource.
     *
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index(Client $client)
    {
        return $this->closetService->index($client->id);
    }

    /**
     * index closets by page
     *
     * Display a listing of the resource.
     *


     * @param Client $client
     * @return JsonResponse
     * @responseApiResource App\Http\Resources\ResponseResource
     */
    public function getByPage(PageRequest $pageRequest, Client $client)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->closetService->getByPage($client->id, $data);
    }

    /**
     * show closet
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param Client $client
     * @param Cloth $cloth
     * @return JsonResponse
     * @throws FailException
     */
    public function show(Client $client, Cloth $cloth)
    {
        return $this->closetService->show($cloth, $client->id);
    }

    /**
     * search closet
     *
     * list closets with paginate
     *
     * @bodyParam search string The search value for search closets. Example: search
     * @bodyParam limit int The number of closets in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: name
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @response 422 {"success":false,"message":"The limit must be greater than 0.,The page must be greater than 0.,order column Column Not Found."}
     * @response 200 {"success":true,"message":"Successfully Founded!","data":{"total":0,"perPage":10,"page":0,"previousPage":0,"nextPage":null,"lastPage":0,"result":[]}}
     * @param IndexSearchRequest $indexSearchRequest
     * @return JsonResponse
     */
    public function indexSearch(IndexSearchRequest $indexSearchRequest, Client $client)
    {
        $data = $indexSearchRequest->only([
            "search",
            "limit",
            "page",
            "orderColumn",
            "orderDir",
        ]);
        $data["client_id"] = $client->id;
        return $this->closetService->indexSearch($data);
    }
}
