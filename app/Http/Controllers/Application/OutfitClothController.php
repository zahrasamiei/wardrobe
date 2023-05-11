<?php

namespace App\Http\Controllers\Application;

use App\Exceptions\FailException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Outfit\BookmarkRequest;
use App\Http\Requests\Application\Outfit\BookmarkSearchRequest;
use App\Http\Requests\Application\Outfit\CreateRequest;
use App\Http\Requests\Application\Outfit\SearchRequest;
use App\Http\Requests\Application\Outfit\UpdateRequest;
use App\Http\Requests\PageRequest;
use App\Models\Outfit;
use App\Services\Application\OutfitService;
use Illuminate\Http\JsonResponse;

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
     * index
     *
     * Display a listing of the resource.
     *
     * @group Outfit
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index()
    {
        return $this->outfitService->index();
    }

    /**
     * index by page
     *
     * Display a listing of the resource.
     *
     * @group Outfit


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function getByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->outfitService->getByPage($data["page"]);
    }

    /**
     * index
     *
     * Display a listing of the resource.
     *
     * @group Bookmark
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function bookmarkIndex()
    {
        return $this->outfitService->indexBookmark();
    }

    /**
     * index by page
     *
     * Display a listing of the resource.
     *
     * @group Bookmark


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function bookmarkGetByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->outfitService->getByPageBookmark($data["page"]);
    }

    /**
     * create
     *
     * Store a newly created resource in storage.
     *
     * @group Outfit
     * @bodyParam name string required.Example: casual
     * @bodyParam season_id int id from seasons, if occasion_id is not set then it is required.Example: 1
     * @bodyParam occasion_id int id from occasions.Example: 1
     * @bodyParam clothes array required The array of id from client clothes.Example: [1,2]
     * @bodyParam bookmarked int default 0
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function store(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
            "season_id",
            "occasion_id",
            "bookmarked",
            "clothes",
        ]);
        return $this->outfitService->create($data);
    }

    /**
     * show
     *
     * Display the specified resource.
     *
     * @group Outfit
     * @param Outfit $outfit
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function show(Outfit $outfit)
    {
        return $this->outfitService->show($outfit);
    }

    /**
     * search
     *
     * list outfits with paginate
     *
     * @group Outfit
     * @bodyParam search string The search value for search blogs. Example: search
     * @bodyParam limit int The number of blogs in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: name
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @bodyParam name string The exact outfit name.Example: casual1
     * @bodyParam season_id int id from seasons,The exact outfit season.Example: 1
     * @bodyParam occasion_id int id from occasions, The exact outfit occasion.Example: 1
     * @bodyParam bookmarked int The exact outfit bookmarked
     * @response 422 {"success":false,"message":"The limit must be greater than 0.,The page must be greater than 0.,order column Column Not Found."}
     * @response 200 {"success":true,"message":"Successfully Founded!","data":{"total":0,"perPage":10,"page":0,"previousPage":0,"nextPage":null,"lastPage":0,"result":[]}}
     * @param SearchRequest $searchRequest
     * @return JsonResponse
     */
    public function indexSearch(SearchRequest $searchRequest)
    {
        $data = $searchRequest->only([
            "search",
            "limit",
            "page",
            "orderColumn",
            "orderDir",
            "bookmarked",
            "name",
            "occasion_id",
            "season_id",
        ]);
        return $this->outfitService->indexSearch($data);
    }

    /**
     * search
     *
     * list bookmarked outfits with paginate
     *
     * @group Bookmark
     * @bodyParam search string The search value for search blogs. Example: search
     * @bodyParam limit int The number of blogs in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: name
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @bodyParam name string The exact outfit name.Example: casual1
     * @bodyParam season_id int id from seasons,The exact outfit season.Example: 1
     * @bodyParam occasion_id int id from occasions, The exact outfit occasion.Example: 1
     * @response 422 {"success":false,"message":"The limit must be greater than 0.,The page must be greater than 0.,order column Column Not Found."}
     * @response 200 {"success":true,"message":"Successfully Founded!","data":{"total":0,"perPage":10,"page":0,"previousPage":0,"nextPage":null,"lastPage":0,"result":[]}}
     * @param BookmarkSearchRequest $searchRequest
     * @return JsonResponse
     */
    public function bookmarkIndexSearch(BookmarkSearchRequest $searchRequest)
    {
        $data = $searchRequest->only([
            "search",
            "limit",
            "page",
            "orderColumn",
            "orderDir",
            "name",
            "occasion_id",
            "season_id",
        ]);
        $data["bookmarked"] = 1;
        return $this->outfitService->indexSearch($data);
    }

    /**
     * update
     *
     * Update the specified resource in storage.
     *
     * @group Outfit
     * @param UpdateRequest $updateRequest
     * @param Outfit $outfit
     * @bodyParam name string if other fields are empty then it is required.Example: casual1
     * @bodyParam season_id int id from seasons.Example: 1
     * @bodyParam occasion_id int id from occasions.Example: 1
     * @bodyParam clothes array The array of id from client clothes.Example: [1]
     * @bodyParam bookmarked int default 0
     * @return JsonResponse
     * @throws FailException
     */
    public function update(UpdateRequest $updateRequest, Outfit $outfit)
    {
        $data = $updateRequest->only([
            "name",
            "season_id",
            "occasion_id",
            "bookmarked",
            "clothes",
        ]);
        return $this->outfitService->updateWithCloth($data, $outfit);
    }

    /**
     * update
     *
     * Update bookmark.
     *
     * @group Bookmark
     * @bodyParam bookmarked int required.Example: 1
     * @param BookmarkRequest $bookmarkRequest
     * @param Outfit $outfit
     * @return JsonResponse
     */
    public function bookmark(BookmarkRequest $bookmarkRequest, Outfit $outfit)
    {
        $data = $bookmarkRequest->only([
            "bookmarked",
        ]);
        return $this->outfitService->updateBookmark($data, $outfit);
    }

    /**
     * show
     *
     * show bookmarked outfit.
     *
     * @group Bookmark
     * @param Outfit $outfit
     * @return JsonResponse
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @throws FailException
     */
    public function bookmarkShow(Outfit $outfit)
    {
        return $this->outfitService->showBookmarked($outfit);
    }

    /**
     * delete
     *
     * Remove the specified resource from storage.
     *
     * @group Outfit
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param Outfit $outfit
     * @return JsonResponse
     */
    public function destroy(Outfit $outfit)
    {
        return $this->outfitService->delete($outfit);
    }
}
