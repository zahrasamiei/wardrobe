<?php

namespace App\Repositories\Eloquent;

use App\Models\Message;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class MessageRepository extends BaseRepository
{
    use ResponseApi;


    /**
     * MessageRepository constructor.
     *
     * @param Message $model
     */
    public function __construct(
        Message $model
    )
    {
        parent::__construct($model);
    }

    /**
     * get today messages
     *
     * @return mixed
     */
    public function getToday()
    {
        $start = date("Y-m-d 00:00:00");
        $end = date("Y-m-d 23:59:59");

        return $this->model->whereNull("admin_id")->whereBetween("created_at", [$start, $end])->orderBy("created_at", "desc");
    }

    /**
     * get recent client messages
     *
     * @param $count
     * @return JsonResponse
     */
    public function recent($count)
    {
        return $this->model->whereNull("admin_id")->orderBy("created_at", "desc")->limit($count)->get();
    }
}
