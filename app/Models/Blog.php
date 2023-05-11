<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "title",
        "content",
        "image",
    ];

    /**
     * get valid columns for search
     *
     * @return array
     */
    public function searchColumns()
    {
        return [
            "title",
            "content",
        ];
    }
}
