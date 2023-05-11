<?php

namespace App\Services\Application;

use App\Http\Resources\Application\CategoryResource;
use App\Repositories\Eloquent\CategoryRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class CategoryService
{
    use ResponseApi;

    /**
     * CategoryService constructor.
     *
     * @param CategoryRepository $categoryRepository
     * @param UploadService $uploadService
     */
    public function __construct(
        protected CategoryRepository $categoryRepository,
        protected UploadService $uploadService
    )
    {

    }

    /**
     * get all categories
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->success(
            __("lang.successfullyFound"),
            CategoryResource::collection($this->categoryRepository->all())
        );
    }

    /**
     * get all categories by page
     *
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            CategoryResource::collection($this->categoryRepository->getByPage($page))
        );
    }

    /**
     * create new category
     *
     * @return JsonResponse
     */
    public function create($data)
    {
        if (!empty($data["icon"])) {
            $this->uploadService->checkExist($data["icon"]);
        }

        return $this->success(
            __("lang.successfullyCreate"),
            new CategoryResource($this->categoryRepository->create($data))
        );
    }

    /**
     * delete category icn
     *
     * @param $data
     * @return JsonResponse
     */
    public function deleteIcon($data)
    {
        return $this->uploadService->delete($data["icon"]);
    }

    /**
     * upload icon
     *
     * @param $data
     * @return JsonResponse
     */
    public function upload($data)
    {
        return $this->uploadService->index($data["icon"], "categories");
    }

}
