<?php

namespace App\Repositories\Eloquent;

use App\Models\Blog;
use App\Traits\ResponseApi;

class BlogRepository extends BaseRepository
{
    use ResponseApi;

    /**
     * BlogRepository constructor.
     *
     * @param Blog $model
     */
    public function __construct(
        Blog $model
    )
    {
        parent::__construct($model);
    }
}
