<?php

namespace App\Repositories\Eloquent;

use App\Models\Color;
use App\Traits\ResponseApi;

class ColorRepository extends BaseRepository
{
    use ResponseApi;


    /**
     * ColorRepository constructor.
     *
     * @param Color $model
     */
    public function __construct(
        Color $model
    )
    {
        parent::__construct($model);
    }
}
