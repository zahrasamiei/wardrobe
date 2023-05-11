<?php

namespace App\Http\Controllers\Application;

use App\Exceptions\FailException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Cloth\CreateRequest;
use App\Http\Requests\Application\Cloth\DeleteImageRequest;
use App\Http\Requests\Application\Cloth\SearchRequest;
use App\Http\Requests\Application\Cloth\UpdateImageRequest;
use App\Http\Requests\Application\Cloth\UpdateRequest;
use App\Http\Requests\Application\Cloth\UploadRequest;
use App\Http\Requests\PageRequest;
use App\Models\Cloth;
use App\Services\Application\ClothService;
use Illuminate\Http\JsonResponse;

class ClosetController extends Controller
{

    /**
     * ClothController constructor.
     *
     * @param ClothService $clothService
     */
    public function __construct(protected ClothService $clothService)
    {

    }

    /**
     * index
     *
     * Display a listing of the resource.
     *
     * @group Closet
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index()
    {
        return $this->clothService->index();
    }

    /**
     * index by page
     *
     * Display a listing of the resource.
     *
     * @group Closet


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function getByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->clothService->getByPage($data["page"]);
    }

    /**
     * closet by season
     *
     * Display a listing of the resource.
     *
     * @param $season_id
     * @group Outfit
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function indexBySeason($season_id)
    {
        return $this->clothService->indexBy(compact('season_id'));
    }

    /**
     * closet by season and page
     *
     * Display a listing of the resource.
     *
     * @group Outfit


     * @param $season_id
     * @return JsonResponse
     * @responseApiResource App\Http\Resources\ResponseResource
     */
    public function indexBySeasonByPage(PageRequest $pageRequest, $season_id)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->clothService->getByPageBy(compact('season_id'), $data["page"]);
    }

    /**
     * closet by occasion
     *
     * Display a listing of the resource.
     *
     * @param $occasion_id
     * @group Outfit
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function indexByOccasion($occasion_id)
    {
        return $this->clothService->indexBy(compact('occasion_id'));
    }

    /**
     * closet by occasion and page
     *
     * Display a listing of the resource.
     *
     * @group Outfit

     * @param $occasion_id
     * @return JsonResponse

     * @responseApiResource App\Http\Resources\ResponseResource
     */
    public function indexByOccasionByPage(PageRequest $pageRequest, $occasion_id)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->clothService->getByPageBy(compact('occasion_id'), $data["page"]);
    }

    /**
     * search
     *
     * list clothes with paginate
     *
     * @group Closet
     * @bodyParam search string The search value for search blogs. Example: search
     * @bodyParam limit int The number of blogs in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: name
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @bodyParam name string The exact clothes name.Example: casual1
     * @bodyParam season_id int id from seasons,The exact clothes season.Example: 1
     * @bodyParam category_id int id from categories,The exact clothes category.Example: 1
     * @bodyParam color_id int id from colors,The exact clothes color.Example: 1
     * @bodyParam occasion_id int id from occasions, The exact clothes occasion.Example: 1
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
            "name",
            "category_id",
            "occasion_id",
            "season_id",
            "color_id",
        ]);
        $data["client_id"] = auth()->user()->id;
        return $this->clothService->indexSearch($data);
    }

    /**
     * create
     *
     * create cloth
     *
     * @group Closet
     * @bodyParam name string required The cloth name.Example: MyShirt
     * @bodyParam season_id int required id from seasons,The exact cloth season.Example: 1
     * @bodyParam category_id int required id from categories,The cloth category.Example: 1
     * @bodyParam color_id int required id from colors,The cloth color.Example: 1
     * @bodyParam occasion_id int required id from occasions, The exact cloth occasion.Example: 1
     * @bodyParam image array required The uploaded images path. Example: ["closet/image.png", "closet/image2.png"]
     * @response 422 {"success":false,"message":"The image Not Found"}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 200 {"success":true,"message":"Successfully Created!","data":{"name":"MyShirt", "season_id":1, "category_id":1, "color_id":1, "occasion_id":1,"image":"closet/image.png"}
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function store(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
            "image",
            "color_id",
            "occasion_id",
            "season_id",
            "category_id",
        ]);
        return $this->clothService->create($data);
    }

    /**
     * show
     *
     * Display the specified resource.
     *
     * @group Closet
     * @param Cloth $cloth
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function show(Cloth $cloth)
    {
        return $this->clothService->show($cloth);
    }

    /**
     * show cloth
     *
     * Display the specified resource.
     *
     * @group Outfit
     * @param Cloth $cloth
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function outfitShow(Cloth $cloth)
    {
        return $this->clothService->show($cloth);
    }

    /**
     * update
     *
     * Update the specified resource in storage.
     *
     * @group Closet
     * @param UpdateRequest $updateRequest
     * @param Cloth $cloth
     * @bodyParam name string The cloth name, required if other fields are null.Example: MyShirt1
     * @bodyParam season_id int id from seasons,The exact cloth season.Example: 1
     * @bodyParam category_id int id from categories,The cloth category.Example: 1
     * @bodyParam color_id int id from colors,The cloth color.Example: 1
     * @bodyParam occasion_id int id from occasions, The exact cloth occasion.Example: 1
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 200 {"success":true,"message":"Successfully Created!","data":{"name":"MyShirt1", "season_id":1, "category_id":1, "color_id":1, "occasion_id":1,"image":"closet/image.png"}
     * @return JsonResponse
     */
    public function update(UpdateRequest $updateRequest, Cloth $cloth)
    {
        $data = $updateRequest->only([
            "name",
            "color_id",
            "occasion_id",
            "season_id",
            "category_id",
        ]);
        return $this->clothService->update($data, $cloth);
    }

    /**
     * update image
     *
     * update image path from closet data
     *
     * @group Closet
     * @bodyParam image array required The uploaded image path.Example: ["closet/image2.png"]
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 422 {"success":false,"message":"Image Not Found!"}
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"name":"MyShirt", "season_id":1, "category_id":1, "color_id":1, "occasion_id":1,"image":"closet/image2.png"}
     * @param UpdateImageRequest $updateRequest
     * @param Cloth $cloth
     * @return JsonResponse
     * @throws FailException
     */
    public function updateImage(UpdateImageRequest $updateRequest, Cloth $cloth)
    {
        $data = $updateRequest->only([
            "image",
        ]);
        return $this->clothService->update($data, $cloth);
    }

    /**
     * delete image
     *
     * delete image from file storage and update cloth
     *
     * @group Closet
     * @bodyParam image string required The uploaded image path.
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 422 {"success":false,"message":"Image Not Found!"}
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"name":"MyShirt", "season_id":1, "category_id":1, "color_id":1, "occasion_id":1,"image":""}
     * @param DeleteImageRequest $deleteImageRequest
     * @param Cloth $cloth
     * @return JsonResponse
     * @throws FailException
     */
    public function imageDelete(DeleteImageRequest $deleteImageRequest, Cloth $cloth)
    {
        $data = $deleteImageRequest->only([
            "image",
        ]);
        return $this->clothService->deleteImage($data["image"], $cloth);
    }

    /**
     * upload image
     *
     * upload image to storage
     *
     * @group Closet
     * @bodyParam image file required image file.
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 422 {"success":false,"message":"Invalid image Uploaded!"}
     * @response 200 {"success":true,"message":"Successfully Uploaded!","data":["path" : "closet/wardrobe_sxj.jpg"]}
     * @param UploadRequest $uploadRequest
     * @return JsonResponse
     */
    public function upload(UploadRequest $uploadRequest)
    {
        $data = $uploadRequest->only([
            "image"
        ]);
        return $this->clothService->upload($data);
    }

    /**
     * delete
     *
     * Remove the specified resource from storage.
     *
     * @group Closet
     * @param Cloth $cloth
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @return JsonResponse
     */
    public function destroy(Cloth $cloth)
    {
        return $this->clothService->delete($cloth);
    }
}
