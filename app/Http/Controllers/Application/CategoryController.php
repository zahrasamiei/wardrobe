<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Category\CreateRequest;
use App\Http\Requests\Application\Category\IconRequest;
use App\Http\Requests\Application\Category\UploadRequest;
use App\Http\Requests\PageRequest;
use App\Services\Application\CategoryService;
use Illuminate\Http\JsonResponse;

/**
 * @group Closet
 *
 * api for managing application
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
     * category index
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
     * category all by page
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
     * create category
     *
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required. Example: world war
     * @bodyParam icon string The path uploaded file. Example: world war content
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
