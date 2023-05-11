<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\IndexSearchRequest;
use App\Http\Requests\PageRequest;
use App\Models\Client;
use App\Models\Outfit;
use App\Services\Panel\OutfitService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * @group Client
 *
 * API endpoints for managing panel
 */

class OutfitClothController extends Controller
{

    /**
     * OutfitController constructor.
     *
     * @param OutfitService $outfitService
     */
    public function __construct(protected OutfitService $outfitService)
    {

    }

    /**
     * index outfits
     *
     * Display a listing of the resource.
     *
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index(Client $client)
    {
        return $this->outfitService->index($client->id);
    }

    /**
     * index outfits by page
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
        return $this->outfitService->getByPage($client->id, $data);
    }

    /**
     * show outfit
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param Outfit $outfit
     * @param Client $client
     * @return JsonResponse
     */
    public function show(Client $client, Outfit $outfit)
    {
        return $this->outfitService->show($outfit, $client->id);
    }

    /**
     * search outfit
     *
     * list outfits with paginate
     *
     * @bodyParam search string The search value for search outfits. Example: search
     * @bodyParam limit int The number of outfits in a page, default is 10. Example: 10
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
        return $this->outfitService->indexSearch($data, $client->id);
    }
}
