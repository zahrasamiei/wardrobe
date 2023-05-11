<?php

namespace App\Services\Landing;

use App\Exceptions\FailException;
use App\Http\Resources\Landing\BlogResource;
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
     * get recent blogs
     *
     * @param $count
     * @return JsonResponse
     */
    public function recent($count)
    {
        if($count <= 0) {
            throw new FailException(
                __("invalidCount"),
                422
            );
        }

        return $this->success(
            __("lang.successfullyFound"),
            BlogResource::collection($this->blogRepository->recent($count))
        );
    }
}
