<?php

namespace App\Http\Controllers\Panel;

use App\Exceptions\FailException;
use App\Http\Requests\PageRequest;
use App\Http\Requests\Panel\Category\CreateRequest;
use App\Http\Requests\Panel\Category\IconRequest;
use App\Http\Requests\Panel\Category\SearchRequest;
use App\Http\Requests\Panel\Category\UpdateRequest;
use App\Http\Requests\Panel\Category\UploadRequest;
use App\Models\Category;
use App\Services\Panel\CategoryService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * @group Category
 *
 * API endpoints for managing panel
 */

class CategoryController extends Controller
{

    /**
     * CategoryController constructor.
     *
     * @param CategoryService $categoryService
     */
    public function __construct(protected CategoryService $categoryService)
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
        return $this->categoryService->index();
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
        return $this->categoryService->getByPage($data["page"]);
    }

    /**
     * search
     *
     * list categories with paginate
     *
     * @bodyParam search string The search value for search categories. Example: search
     * @bodyParam limit int The number of categories in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: name
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @bodyParam active int The category exact active.Example: 1
     * @bodyParam name string The category exact name.Example: sweet
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
            "active",
            "name",
        ]);
        return $this->categoryService->indexSearch($data);
    }

    /**
     * create
     *
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required. Example: world war
     * @bodyParam icon string The path uploaded file. Example: categories/image.png
     * @bodyParam active int The category active,default is 1. Example: 0
     * @response 422 {"success": false,"message": "The name field is required."}
     * @response 422 {"success":false,"message":"The icon Not Found"}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 200 {"success":true,"message":"Successfully Created!","data":{"id":1,"name":"world war","active":"0","image":"categories/image.png"}}
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function store(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
            "icon",
            "active",
        ]);
        return $this->categoryService->create($data);
    }

    /**
     * show
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param Category $category
     * @return JsonResponse
     */
    public function show(Category $category)
    {
        return $this->categoryService->show($category);
    }

    /**
     * update
     *
     * Update the specified resource in storage.
     *
     * @bodyParam name string. Example: world war1
     * @bodyParam active int. Example: 1
     * @bodyParam icon string The uploaded icon path. Example: categories/image1.png
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"world war1","icon":"categories/image1.png","active":"1"}}
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 422 {"success":false,"message":"The image Not Found"}
     * @param UpdateRequest $updateRequest
     * @param Category $category
     * @return JsonResponse
     * @throws FailException
     */
    public function update(UpdateRequest $updateRequest, Category $category)
    {
        $data = $updateRequest->only([
            "name",
            "icon",
            "active",
        ]);
        return $this->categoryService->update($data, $category);
    }

    /**
     * delete
     *
     * Remove the specified resource from storage.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param Category $category
     * @return JsonResponse
     */
    public function destroy(Category $category)
    {
        return $this->categoryService->delete($category);
    }

    /**
     * delete icon
     *
     * Remove icon from file storage
     *
     * @bodyParam icon string required icon uploaded path. Example: categories/image.png
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param IconRequest $iconRequest
     * @return JsonResponse
     */
    public function deleteIcon(IconRequest $iconRequest)
    {
        $data = $iconRequest->only([
            "icon"
        ]);
        return $this->categoryService->deleteIcon($data);
    }

    /**
     * upload icon
     *
     * upload icon to file storage
     *
     * @bodyParam icon file required icon file.
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 422 {"success":false,"message":"Invalid icon Uploaded!"}
     * @response 200 {"success":true,"message":"Successfully Uploaded!","data":["path" : "categories/wardrobe_sxj.jpg"]}
     * @param UploadRequest $uploadRequest
     * @return JsonResponse
     */
    public function upload(UploadRequest $uploadRequest)
    {
        $data = $uploadRequest->only([
            "icon"
        ]);
        return $this->categoryService->upload($data);
    }
}
