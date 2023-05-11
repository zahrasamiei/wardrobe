<?php

namespace App\Services\Application;

use App\Exceptions\FailException;
use App\Http\Resources\Application\ClothResource;
use App\Http\Resources\PaginationResource;
use App\Repositories\Eloquent\ClothRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class ClothService
{
    use ResponseApi;

    /**
     * ResetPasswordService constructor.
     *
     * @param ClothRepository $clothRepository
     * @param UploadService $uploadService
     */
    public function __construct(
        protected ClothRepository $clothRepository,
        protected UploadService $uploadService
    )
    {

    }

    /**
     * get all cloths by search
     *
     * @param $data
     * @return JsonResponse
     */
    public function indexBy($data)
    {
        $data["client_id"] = auth()->user()->id;
        return $this->success(
            __("lang.successfullyFound"),
            ClothResource::collection($this->clothRepository->find($data)->get())
        );
    }

    /**
     * get all cloths by search and paginate
     *
     * @param $data
     * @return JsonResponse
     */
    public function getByPageBy($data, $page)
    {
        $data["client_id"] = auth()->user()->id;
        return $this->success(
            __("lang.successfullyFound"),
            ClothResource::collection($this->clothRepository->getByPage($page, $data))
        );
    }

    /**
     * get all cloths for a client
     *
     * @return JsonResponse
     */
    public function index()
    {
        $client_id = auth()->user()->id;
        return $this->success(
            __("lang.successfullyFound"),
            ClothResource::collection($this->clothRepository->find(compact('client_id'))->get())
        );
    }

    /**
     * get all cloths for a client by paginate
     *
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        $client_id = auth()->user()->id;
        return $this->success(
            __("lang.successfullyFound"),
            ClothResource::collection($this->clothRepository->getByPage($page, compact('client_id')))
        );
    }

    /**
     * show clothes with search,paginate and sort
     *
     * @return JsonResponse
     */
    public function indexSearch($data, $child = false)
    {
        $data["limit"] = $data["limit"] ?? config("configs.limit");
        $data["page"] = $data["page"] ?? config("configs.page");
        $data["orderDir"] = $data["orderDir"] ?? config("configs.orderDir");
        $data["orderColumn"] = $data["orderColumn"] ?? config("configs.orderColumn");
        $data["search"] = $data["search"] ?? "";
        $data["columns"] = getModelColumns("clothes");

        $result = $this->clothRepository->search($data);
        $result["data"] = ClothResource::collection($result["data"], $child);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * create new cloth
     *
     * @return JsonResponse
     */
    public function create($data)
    {
        $data["client_id"] = auth()->user()->id;
        $data["image"] = implode(",", $data["image"]);

        return $this->success(
            __("lang.successfullyCreate"),
            new ClothResource($this->clothRepository->create($data))
        );
    }

    /**
     * show specific cloth
     *
     * @param $cloth
     * @return JsonResponse
     * @throws FailException
     */
    public function show($cloth)
    {
        if (auth()->user()->id != $cloth->client_id) {
            throw new FailException(
                __("lang.notFound"),
                404
            );
        }

        return $this->success(
            __("lang.successfullyFound"),
            new ClothResource($cloth)
        );
    }

    /**
     * delete image form a cloth
     *
     * @param $image
     * @param $cloth
     * @return JsonResponse
     * @throws FailException
     */
    public function deleteImage($image, $cloth)
    {
        if (auth()->user()->id != $cloth->client_id) {
            throw new FailException(
                __("lang.notFound"),
                404
            );
        }

        if (!in_array($image, $cloth->image)) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        $this->uploadService->checkExist($image);

        $this->uploadService->delete($image);

        return $this->update(compact('image'), $cloth);
    }

    /**
     * upload image
     *
     * @param $data
     * @return JsonResponse
     * @throws FailException
     */
    public function upload($data)
    {
        return $this->uploadService->index($data["image"], "cloth");
    }

    /**
     * update specific cloth
     *
     * @param $data
     * @param $cloth
     * @return JsonResponse
     * @throws FailException
     */
    public function update($data, $cloth)
    {
        if (auth()->user()->id != $cloth->client_id) {
            throw new FailException(
                __("lang.notFound"),
                404
            );
        }

        if (isset($data["image"])) {
            $this->uploadService->checkExist($data["image"]);
        }

        $this->clothRepository->update([
            "find" => [
                "id" => $cloth->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new ClothResource(
                $this->clothRepository->find([
                    "id" => $cloth->id
                ])->first()
            )
        );
    }

    /**
     * update specific cloth
     *
     * @param $cloth
     * @return JsonResponse
     * @throws FailException
     */
    public function delete($cloth)
    {
        if (auth()->user()->id != $cloth->client_id) {
            throw new FailException(
                __("lang.notFound"),
                404
            );
        }

        $this->clothRepository->delete([
            "id" => $cloth->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

}
