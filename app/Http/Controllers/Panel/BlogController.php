<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\PageRequest;
use App\Http\Requests\Panel\Blog\ImageRequest;
use App\Http\Requests\Panel\Blog\CreateRequest;
use App\Http\Requests\Panel\Blog\UpdateRequest;
use App\Http\Requests\Panel\Blog\SearchRequest;
use App\Http\Requests\Panel\Blog\UploadRequest;
use App\Models\Blog;
use App\Services\Panel\BlogService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * @group Blog
 *
 * API endpoints for managing panel
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
        return $this->blogService->getByPage($data["page"]);
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
        return $this->blogService->index();
    }

    /**
     * search
     *
     * list blogs with paginate
     *
     * @bodyParam search string The search value for search blogs. Example: search
     * @bodyParam limit int The number of blogs in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: title
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @bodyParam title string The exact title of the blog. Example: zahra
     * @bodyParam content string The exact content of the blog. Example: content
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
            "title",
            "content",
        ]);
        return $this->blogService->indexSearch($data);
    }

    /**
     * create
     *
     * Store a newly created resource in storage.
     *
     * @bodyParam title string required. Example: world war
     * @bodyParam content string required. Example: world war content
     * @bodyParam image string required The uploaded image path. Example: blogs/image.png
     * @response 422 {"success": false,"message": "The title field is required.,The content field is required."}
     * @response 422 {"success":false,"message":"The image Not Found"}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 200 {"success":true,"message":"Successfully Created!","data":{"id":2,"title":"world war","content":"world war content","image":"blogs/image.png","created_at":"11 July 2022"}}
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function store(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "title",
            "image",
            "content"
        ]);
        return $this->blogService->create($data);
    }

    /**
     * show
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param Blog $blog
     * @return JsonResponse
     */
    public function show(Blog $blog)
    {
        return $this->blogService->show($blog);
    }

    /**
     * update
     *
     * Update the specified resource in storage.
     *
     * @bodyParam title string. Example: world war1
     * @bodyParam content string. Example: world war content1
     * @bodyParam image string The uploaded image path. Example: blogs/image1.png
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":2,"title":"world war1","content":"world war content1","image":"blogs/image1.png","created_at":"11 July 2022"}}
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 422 {"success":false,"message":"The image Not Found"}
     * @param UpdateRequest $updateRequest
     * @param Blog $blog
     * @return JsonResponse
     */
    public function update(UpdateRequest $updateRequest, Blog $blog)
    {
        $data = $updateRequest->only([
            "title",
            "image",
            "content"
        ]);
        return $this->blogService->update($data, $blog);
    }

    /**
     * delete
     *
     * Remove the specified resource from storage.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param Blog $blog
     * @return JsonResponse
     */
    public function destroy(Blog $blog)
    {
        return $this->blogService->delete($blog);
    }

    /**
     * delete image
     *
     * Remove image from file storage
     *
     * @bodyParam image string required image uploaded path. Example: blogs/image.png
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param ImageRequest $imageRequest
     * @return JsonResponse
     */
    public function deleteImage(ImageRequest $imageRequest)
    {
        $data = $imageRequest->only([
            "image"
        ]);
        return $this->blogService->deleteImage($data);
    }

    /**
     * upload image
     *
     * upload image to file storage
     *
     * @bodyParam image file required image file.
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 422 {"success":false,"message":"Invalid image Uploaded!"}
     * @response 200 {"success":true,"message":"Successfully Uploaded!","data":["path" : "blogs/wardrobe_sxj.jpg"]}
     * @param UploadRequest $uploadRequest
     * @return JsonResponse
     */
    public function upload(UploadRequest $uploadRequest)
    {
        $data = $uploadRequest->only([
            "image"
        ]);
        return $this->blogService->upload($data);
    }
}
