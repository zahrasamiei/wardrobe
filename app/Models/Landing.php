<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    use HasFactory;

    protected $fillable = [
        "key",
        "title",
        "subtitle",
        "text",
        "category",
        "link",
        "image",
    ];
}
