<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cloth extends Model
{
    use HasFactory;

    /**
     * change table name
     *
     * @var string
     */
    protected $table = "clothes";

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "image",
        "client_id",
        "color_id",
        "occasion_id",
        "season_id",
        "category_id",
    ];

    /**
     * get client for each cloth
     *
     * @return BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * get color for each cloth
     *
     * @return BelongsTo
     */
    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    /**
     * get occasion for each cloth
     *
     * @return BelongsTo
     */
    public function occasion()
    {
        return $this->belongsTo(Occasion::class);
    }

    /**
     * get season for each cloth
     *
     * @return BelongsTo
     */
    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    /**
     * get category for each cloth
     *
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * get occasion for each outfit
     *
     * @return BelongsToMany
     */
    public function outfits()
    {
        return $this->belongsToMany(Outfit::class, "outfit_clothes");
    }

    public function getImageAttribute($value)
    {
        return explode(",", $value);
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
            "image",
            "client_id",
            "color_id",
            "occasion_id",
            "season_id",
            "category_id",
        ];
    }
}
