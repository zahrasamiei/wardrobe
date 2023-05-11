<?php

namespace App\Services\Panel;

use App\Exceptions\FailException;
use App\Http\Resources\Panel\CategoryResource;
use App\Http\Resources\PaginationResource;
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
     * @param $page
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
     * show categories with search,paginate and sort
     *
     * @return JsonResponse
     */
    public function indexSearch($data)
    {
        $data["limit"] = $data["limit"] ?? config("configs.limit");
        $data["page"] = $data["page"] ?? config("configs.page");
        $data["orderDir"] = $data["orderDir"] ?? config("configs.orderDir");
        $data["orderColumn"] = $data["orderColumn"] ?? config("configs.orderColumn");
        $data["search"] = $data["search"] ?? "";
        $data["columns"] = getModelColumns("categories");

        $result = $this->categoryRepository->search($data);
        $result["data"] = CategoryResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific category
     *
     * @return JsonResponse
     */
    public function show($category)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new CategoryResource($category)
        );
    }

    /**
     * update specific category
     *
     * @param $data
     * @param $category
     * @return JsonResponse
     * @throws FailException
     */
    public function update($data, $category)
    {
        if (isset($data["name"])) {
            checkUnique([
                "id" => $category->id,
                "column" => "name",
                "exist" => $this->categoryRepository->find(["name" => $data["name"]])->first()
            ]);
        }

        if (!empty($data["icon"])) {
            $this->uploadService->checkExist($data["icon"]);
        }

        $this->categoryRepository->update([
            "find" => [
                "id" => $category->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new CategoryResource(
                $this->categoryRepository->find([
                    "id" => $category->id
                ])->first()
            )
        );
    }

    /**
     * update specific category
     *
     * @return JsonResponse
     */
    public function delete($category)
    {
        $this->categoryRepository->delete([
            "id" => $category->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
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
