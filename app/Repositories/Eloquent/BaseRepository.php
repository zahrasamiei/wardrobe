<?php

namespace App\Repositories\Eloquent;

use App\Exceptions\FailException;
use App\Traits\ResponseApi;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class BaseRepository
{
    use ResponseApi;

    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * create new model
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * all by paginate
     *
     * @param int $page
     * @param null $where
     * @return mixed
     */
    public function getByPage($page = 1, $where = null)
    {
        $query = $where ? $this->model->where($where) : $this->model;
        return $query->paginate(10, ['*'], 'page', $page);
    }

    /**
     * all models
     *
     * @return Model[]|Collection
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * all models group by created_at
     *
     * @return Model[]|Collection
     */
    public function groupbyCreatedAt($count = null)
    {
        $query = isset($count) ?
            $this->model->whereNull("admin_id")->orderBy("created_at", "desc")->paginate($count) :
            $this->model->whereNull("admin_id")->orderBy("created_at", "desc")->get()
        ;

        return $query
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('d F'); // grouping by months
            })
            ;
    }

    /**
     * all models
     *
     * @return Model[]|Collection
     */
    public function search($data)
    {
        $search = strtolower($data["search"]);
        $validColumns = $this->model->searchColumns() ?? [];

        $query = $this->model->where(function ($query) use ($search, $validColumns, $data){
            $relations = $data["relations"] ?? [];

            foreach ($validColumns as $column) {
                if (isset($data[$column])) {
                    if (isset($data[$column]["operation"])) {
                        $data[$column]["operation"] == "BETWEEN" ? $query->whereBetween($column, $data[$column]["value"]) : $query->where($column, $data[$column]);
                    }
                    else {
                        $query->where($column, $data[$column]);
                    }
                }
            }

            foreach ($relations as $relation) {
                $table = $relation["table"];
                $key = $relation["key"];
                $value = $relation["value"];
                $operation = $relation["operation"] ?? "=";

                $query->whereHas($table, function ($sql) use ($key, $value, $operation){
                    $sql->where($key, $operation, $value);
                });

            }
        });

        if (!empty($search)) {
            $query->where(function ($sql) use($search, $data){
                foreach ($data["columns"] as $column) {
                    $sql->orWhere($column, "LIKE", "%{$search}%");
                }
            });
        }

        $total = $query->count();
        $perPage = (int) $data["limit"];
        $page = $total == 0 ? 0 : (int) $data["page"];
        $offset = ($page - 1) * $perPage;
        $lastPage = ceil($total / $perPage);
        $previousPage = $page == 1 ? null : ($page == 0 ? 0 : $page - 1);
        $nextPage = ($page == $lastPage || $total == 0) ? null : $page + 1;
        $data = $query
            ->orderBy(
                $data["orderColumn"],
                $data["orderDir"]
            )
            ->offset($offset)
            ->limit($perPage)
            ->get()
        ;

        return compact(
            'total',
            'perPage',
            'page',
            'previousPage',
            'nextPage',
            'lastPage',
            'data'
        );
    }

    /**
     * find model
     *
     * @param $data
     * @return mixed
     */
    public function find($data)
    {
        return $this->model->where($data);
    }

    /**
     * find By relation model
     *
     * @param $data
     * @return mixed
     */
    public function findByRelation($relation, $data)
    {
        $key = $data["key"];
        $value = $data["value"];
        $operator = $data["operator"] ?? "=";

        return $this->model->whereHas($relation, function($query) use ($key, $value, $operator){
            $value = $operator == "LIKE" ? "%$value%" : $value;
            $query->where($key, $operator, $value);
        });
    }

    /**
     * update model
     *
     * @param $data
     * @return mixed
     */
    public function update($data)
    {
        return $this->find($data["find"])->update($data["update"]);

    }

    /**
     * update on based model
     *
     * @param $data
     * @return JsonResponse
     */
    public function updateOne($model, $data)
    {
        try {
            DB::beginTransaction();
            $model = $model->update($data);
            DB::commit();
            return $model;
        } catch (\Exception $e)
        {
            DB::rollBack();
            throw new FailException(
                $e->getMessage(),
                "500"
            );
        }
    }

    /**
     * delete model
     *
     * @param $data
     * @return JsonResponse
     */
    public function delete($data)
    {
        try {
            DB::beginTransaction();
            $model = $this->find($data)->delete();
            DB::commit();
            return $model;
        } catch (\Exception $e)
        {
            DB::rollBack();
            throw new FailException(
                $e->getMessage(),
                500
            );
        }
    }

    /**
     * get recent data
     *
     * @param $count
     * @return JsonResponse
     */
    public function recent($count)
    {
        return $this->model->orderBy("created_at", "desc")->limit($count)->get();
    }
}
