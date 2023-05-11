<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landing\Blog\RecentRequest;
use App\Http\Requests\Landing\Blog\SearchRequest;
use App\Models\Blog;
use App\Services\Landing\BlogService;
use Illuminate\Http\JsonResponse;

/**
 * @group Blog
 *
 * API endpoints for Manage Landing
 */
class BlogController extends Controller
{

    /**
     * BlogController constructor.
     *
     * @param BlogService $blogService
     */
    public function __construct(protected BlogService $blogService)
    {

    }

    /**
     * list
     *
     * list blogs with paginate
     *
     * @unauthenticated
     * @bodyParam search string The search value for search blogs. Example: search
     * @bodyParam limit int The number of blogs in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: title
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @bodyParam title string The exact title of blogs for search. Example: title
     * @response 422 {"success":false,"message":"The limit must be greater than 0.,The page must be greater than 0.,order column Column Not Found."}
     * @response 200 {"success":true,"message":"Successfully Founded!","data":{"total":0,"perPage":10,"page":0,"previousPage":0,"nextPage":null,"lastPage":0,"result":[]}}
     */
    public function indexSearch(SearchRequest $searchRequest)
    {
        $data = $searchRequest->only([
            "search",
            "limit",
            "page",
            "orderColumn",
            "orderDir",
            "title",
        ]);
        return $this->blogService->indexSearch($data);
    }

    /**
     * show
     *
     * show single blog
     *
     * @unauthenticated
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function show(Blog $blog)
    {
        return $this->blogService->show($blog);
    }

    /**
     * recent
     *
     * get recent blogs
     *
     * @unauthenticated
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function recent(RecentRequest $recentRequest)
    {
        $data = $recentRequest->only([
            "count"
        ]);
        return $this->blogService->recent($data);
    }

    /**
     * recent blogs
     *
     * get recent blogs
     *
     * @group Home
     * @unauthenticated
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function recentHome(RecentRequest $recentRequest)
    {
        $data = $recentRequest->only([
            "count"
        ]);
        return $this->blogService->recent($data);
    }

}
