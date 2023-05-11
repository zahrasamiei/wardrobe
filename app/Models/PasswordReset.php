<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PasswordReset extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "client_id",
        "token",
        "created_at",
        "is_expired",
        "expired_at",
    ];

    /**
     * get client for each password reset
     *
     * @return BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * check request expired
     *
     * @return BelongsTo
     */
    public function isExpired()
    {
        return $this->is_expired;
    }
}
