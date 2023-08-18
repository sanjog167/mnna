<?php

namespace App\Models;
    
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = ['banner_link'];

    public function getEmbedUrlAttribute()
    {
        $urlParts = parse_url($this->banner_link);
        parse_str($urlParts['query'], $queryParts);
        $videoId = $queryParts['v'] ?? null;
        if (!$videoId) {
            return null;
        }
        return 'https://www.youtube.com/embed/' . $videoId;
    }
}