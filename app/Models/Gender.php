<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    use HasFactory;

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "name",
    ];

    /**
     * get client data for each gender
     *
     * @return HasMany
     */
    public function clientData()
    {
        return $this->hasMany(ClientData::class);
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
        ];
    }
}
