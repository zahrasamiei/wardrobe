<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Traits\ResponseApi;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class CategoryRepository extends BaseRepository
{
    use ResponseApi;

    /**
     * CategoryRepository constructor.
     *
     * @param Category $model
     */
    public function __construct(
        Category $model
    )
    {
        parent::__construct($model);
    }
}
