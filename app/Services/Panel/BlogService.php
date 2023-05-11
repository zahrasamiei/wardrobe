<?php

namespace App\Services\Panel;

use App\Exceptions\FailException;
use App\Http\Resources\Panel\BlogResource;
use App\Http\Resources\PaginationResource;
use App\Repositories\Eloquent\BlogRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class BlogService
{
    use ResponseApi;

    /**
     * BlogService constructor.
     *
     * @param BlogRepository $blogRepository
     * @param UploadService $uploadService
     */
    public function __construct(
        protected BlogRepository $blogRepository,
        protected UploadService $uploadService
    )
    {
    }

    /**
     * get all blogs
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->success(
            __("lang.successfullyFound"),
            BlogResource::collection($this->blogRepository->all())
        );
    }

    /**
     * get all blogs by page
     *
     * @param $page
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            BlogResource::collection($this->blogRepository->getByPage($page))
        );
    }

    /**
     * create new blog
     *
     * @param $data
     * @return JsonResponse
     */
    public function create($data)
    {
        if (!empty($data["image"])) {
            $this->uploadService->checkExist($data["image"]);
        }

        return $this->success(
            __("lang.successfullyCreate"),
            new BlogResource($this->blogRepository->create($data))
        );
    }

    /**
     * show clients with search,paginate and sort
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
        $data["columns"] = getModelColumns("blogs");

        $result = $this->blogRepository->search($data);
        $result["data"] = BlogResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific blog
     *
     * @param $blog
     * @return JsonResponse
     */
    public function show($blog)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new BlogResource($blog)
        );
    }

    /**
     * update specific blog
     *
     * @param $data
     * @param $blog
     * @return JsonResponse
     * @throws FailException
     */
    public function update($data, $blog)
    {
        if (isset($data["title"])) {
            checkUnique([
                "id" => $blog->id,
                "column" => "title",
                "exist" => $this->blogRepository->find(["title" => $data["title"]])->first()
            ]);
        }

        $this->blogRepository->update([
            "find" => [
                "id" => $blog->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new BlogResource(
                $this->blogRepository->find([
                    "id" => $blog->id
                ])->first()
            )
        );
    }

    /**
     * delete specific blog
     *
     * @param $blog
     * @return JsonResponse
     */
    public function delete($blog)
    {
        $this->blogRepository->delete([
            "id" => $blog->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

    /**
     * delete blog image
     *
     * @param $data
     * @return JsonResponse
     */
    public function deleteImage($data)
    {
        return $this->uploadService->delete($data["image"]);
    }

    /**
     * upload image
     *
     * @param $data
     * @return JsonResponse
     */
    public function upload($data)
    {
        return $this->uploadService->index($data["image"], "blogs");
    }

}
