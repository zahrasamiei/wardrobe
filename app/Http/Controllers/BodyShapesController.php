<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gender\CreateRequest;
use App\Http\Requests\Gender\UpdateRequest;
use App\Models\Gender;
use App\Services\GenderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BodyShapesController extends Controller
{

    /**
     * @var GenderService $genderService
     */
    protected $genderService;

    /**
     * GenderController constructor.
     *
     * @param GenderService $genderService
     */
    public function __construct(GenderService $genderService)
    {
        $this->genderService = $genderService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->genderService->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function store(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
            "image",
            "icon",
        ]);
        return $this->genderService->create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param Gender $gender
     * @return JsonResponse
     */
    public function show(Gender $gender)
    {
        return $this->genderService->show($gender);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $updateRequest
     * @param Gender $gender
     * @return JsonResponse
     */
    public function update(UpdateRequest $updateRequest, Gender $gender)
    {
        $data = $updateRequest->only([
            "name"
        ]);
        return $this->genderService->update($data, $gender);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Gender $gender
     * @return Response
     */
    public function destroy(Gender $gender)
    {
        return $this->genderService->delete($gender);
    }
}
