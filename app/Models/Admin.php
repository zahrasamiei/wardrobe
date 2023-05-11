<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory, HasApiTokens;

    /**
     * The attributes that should be changed for show.
     *
     * @var array<int, string>
     */
    protected $casts = [
        "created_at" => 'datetime:Y-m-d H:i:s',
        "updated_at" => 'datetime:Y-m-d H:i:s',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "email",
        "password",
    ];

    /**
     * get messages for a admin
     *
     * @return HasMany
     */
    public function messages()
    {
        return $this->hasMany(Message::class, 'admin_id')->whereNotNull("admin_id");
    }
}
