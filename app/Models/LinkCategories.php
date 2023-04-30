<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkCategories extends Model
{
    use HasFactory;

    function links()
    {
        return $this->hasMany(Link::class);
    }
}
