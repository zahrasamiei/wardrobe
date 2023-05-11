<?php

namespace App\Repositories\Eloquent;

use App\Models\BodyShape;
use App\Traits\ResponseApi;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class BodyShapeRepository
{
    use ResponseApi;

    /**
     * @var BodyShape $model
     */
    private $model;

    /**
     * BodyShapeRepository constructor.
     *
     * @param BodyShape $model
     */
    public function __construct(
        BodyShape $model
    )
    {
        $this->model = $model;
    }

    /**
     * create new bodyShape
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        try {
            DB::beginTransaction();
            $bodyShape = $this->model->create($data);
            DB::commit();
            return $bodyShape;
        } catch (\Exception $e)
        {
            DB::rollBack();
            return $this->fail(
                $e->getMessage()
            );
        }
    }

    /**
     * all bodyShapes
     *
     * @return BodyShape[]|Collection
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * find bodyShape
     *
     * @param $data
     * @return mixed
     */
    public function find($data)
    {
        return $this->model->where($data);
    }

    /**
     * update bodyShape
     *
     * @param $data
     * @return JsonResponse
     */
    public function update($data)
    {
        try {
            DB::beginTransaction();
            $bodyShape = $this->find($data["find"])->update($data["update"]);
            DB::commit();
            return $bodyShape;
        } catch (\Exception $e)
        {
            DB::rollBack();
            return $this->fail(
                $e->getMessage()
            );
        }
    }

    /**
     * delete bodyShape
     *
     * @param $data
     * @return JsonResponse
     */
    public function delete($data)
    {
        try {
            DB::beginTransaction();
            $bodyShape = $this->find($data)->delete();
            DB::commit();
            return $bodyShape;
        } catch (\Exception $e)
        {
            DB::rollBack();
            return $this->fail(
                $e->getMessage()
            );
        }
    }
}
