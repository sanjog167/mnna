<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mediacoverage extends Model
{
    use SoftDeletes;
    
    public function category() {
        return $this->belongsTo(MediacoverageCategory::class, 'category_id');
    }

}
