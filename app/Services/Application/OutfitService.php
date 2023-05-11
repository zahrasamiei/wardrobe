<?php

namespace App\Services\Application;

use App\Exceptions\FailException;
use App\Http\Resources\Application\OutfitResource;
use App\Http\Resources\PaginationResource;
use App\Models\Outfit;
use App\Repositories\Eloquent\OutfitRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class OutfitService
{
    use ResponseApi;

    /**
     * ResetPasswordService constructor.
     *
     * @param OutfitRepository $outfitRepository
     */
    public function __construct(
        protected OutfitRepository $outfitRepository
    )
    {

    }

    /**
     * get all outfits for a client
     *
     * @return JsonResponse
     */
    public function index()
    {
        $client_id = auth()->user()->id;

        return $this->success(
            __("lang.successfullyFound"),
            OutfitResource::collection(
                $this->outfitRepository->findByRelation(
                    "clothes",
                    [
                        "key" => "client_id",
                        "value" => $client_id,
                    ]
                )
                ->get()
            )
        );
    }

    /**
     * get all outfits for a client by page
     *
     * @return JsonResponse
     */
    public function getByPage($page)
    {
        $client_id = auth()->user()->id;

        return $this->success(
            __("lang.successfullyFound"),
            OutfitResource::collection(
                $this->outfitRepository->findByRelation(
                    "clothes",
                    [
                        "key" => "client_id",
                        "value" => $client_id,
                    ]
                )
                ->paginate(perPage: 10, page: $page)
            )
        );
    }

    /**
     * create with clothes new outfit
     *
     * @param $data
     * @return JsonResponse
     * @throws FailException
     */
    public function create($data)
    {
        $outfitData = $data;
        unset($outfitData["clothes"]);

        try {
            DB::beginTransaction();
            $outfit = $this->outfitRepository->create($outfitData);
            $outfit->clothes()->attach($data["clothes"]);
            DB::commit();
        } catch (\Exception $e)
        {
            DB::rollBack();
            throw new FailException(
                $e->getMessage(),
                "500"
            );
        }

        return $this->success(
            __("lang.successfullyCreate"),
            new OutfitResource($outfit)
        );
    }

    /**
     * update with clothes new outfit
     *
     * @param $data
     * @return JsonResponse
     * @throws FailException
     */
    public function updateWithCloth($data, $outfit)
    {
        $client_id = auth()->user()->id;
        if (!$this->checkClient($client_id, $outfit)) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        $outfitData = $data;
        if (isset($outfitData["clothes"])) unset($outfitData["clothes"]);

        try {
            DB::beginTransaction();

            if (!empty($outfitData)) {
                $this->outfitRepository->update([
                    "find" => [
                        "id" => $outfit->id
                    ],
                    "update" => $outfitData
                ]);
            }

            if (!empty($data["clothes"])) {
                $outfit->clothes()->sync($data["clothes"]);
            }

            DB::commit();
        } catch (\Exception $e)
        {
            DB::rollBack();
            throw new FailException(
                $e->getMessage(),
                "500"
            );
        }

        return $this->success(
            __("lang.successfullyUpdate"),
            new OutfitResource($this->outfitRepository->find(["id" => $outfit->id])->first())
        );
    }

    /**
     * get all outfits bookmarked
     *
     * @return JsonResponse
     */
    public function indexBookmark()
    {
        $client_id = auth()->user()->id;
        $finds = ["bookmarked" => "1"];
        $data = $this->outfitRepository->findByRelation(
            "clothes",
            [
                "key" => "client_id",
                "value" => $client_id,
            ]
            ) ->where($finds)
        ;

        return $this->success(
            __("lang.successfullyFound"),
            OutfitResource::collection($data->get())
        );
    }

    /**
     * get all outfits bookmarked
     *
     * @param $page
     * @return JsonResponse
     */
    public function getByPageBookmark($page)
    {
        $client_id = auth()->user()->id;
        $finds = ["bookmarked" => "1"];
        $data = $this->outfitRepository->findByRelation(
            "clothes",
            [
                "key" => "client_id",
                "value" => $client_id,
            ]
            ) ->where($finds)
        ;

        return $this->success(
            __("lang.successfullyFound"),
            OutfitResource::collection($data->paginate(10, ["*"], "page", $page))
        );
    }

    /**
     * show outfits with search,paginate and sort
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
        $data["columns"] = getModelColumns("outfits");
        $data["relations"][] = [
            "table" => "clothes",
            "key" => "client_id",
            "value" => auth()->user()->id
        ];

        $result = $this->outfitRepository->search($data);
        $result["data"] = OutfitResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific outfit
     *
     * @param $outfit
     * @return JsonResponse
     * @throws FailException
     */
    public function show($outfit)
    {
        $client_id = auth()->user()->id;

        if (!$this->checkClient($client_id, $outfit)) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        return $this->success(
            __("lang.successfullyFound"),
            new OutfitResource($outfit)
        );
    }

    /**
     * show specific bookmarked outfit
     *
     * @param $outfit
     * @return JsonResponse
     * @throws FailException
     */
    public function showBookmarked($outfit)
    {
        $client_id = auth()->user()->id;

        if (!$this->checkClient($client_id, $outfit) || $outfit->bookmarked != 1) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        return $this->success(
            __("lang.successfullyFound"),
            new OutfitResource($outfit)
        );
    }

    /**
     * check outft client is given client
     *
     * @param $client_id
     * @param $outfit
     * @return boolean
     */
    private function checkClient($client_id, $outfit)
    {
        return $outfit->clothes->pluck("client_id")->diff(collect($client_id))->isEmpty();
    }

    /**
     * update specific outfit bookmark
     *
     * @param $data
     * @param $outfit
     * @return JsonResponse
     * @throws FailException
     */
    public function updateBookmark($data, $outfit)
    {
        $client_id = auth()->user()->id;
        if(!$this->checkClient($client_id, $outfit)) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        return $this->update($data, $outfit);
    }

    /**
     * update specific outfit
     * @param $data
     * @param $outfit
     * @return JsonResponse
     * @throws FailException
     */
    public function update($data, $outfit)
    {
        if(!$this->checkClient(auth()->user()->id, $outfit)) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        $this->outfitRepository->update([
            "find" => [
                "id" => $outfit->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new OutfitResource(
                $this->outfitRepository->find([
                    "id" => $outfit->id
                ])->first()
            )
        );
    }

    /**
     * delete specific outfit
     *
     * @param $outfit
     * @return JsonResponse
     * @throws FailException
     */
    public function delete($outfit)
    {
        if (!$this->checkClient(auth()->user()->id, $outfit)) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        $this->outfitRepository->delete([
            "id" => $outfit->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

}
