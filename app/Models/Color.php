<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Model
{
    use HasFactory;

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "code",
    ];

    /**
     * get clothes for each color
     *
     * @return HasMany
     */
    public function clothes()
    {
        return $this->hasMany(Cloth::class);
    }

    /**
     * get valid columns for search
     *
     * @return array
     */
    public function searchColumns()
    {
        return [
            "name",
            "code",
        ];
    }
}
