<?php

namespace App\Models;

use AshAllenDesign\FaviconFetcher\Facades\Favicon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    public function getFavicon()
    {
        // return Favicon::fetchOr($this->url, 'https://example.com/favicon.ico')->getFaviconUrl();
    }
}
