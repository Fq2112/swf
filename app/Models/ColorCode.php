<?php

namespace App\Models;

use App\Models\Gallery;
use App\Models\ColorCategory;
use Illuminate\Database\Eloquent\Model;

class ColorCode extends Model
{
    protected $table = 'color_codes';

    protected $guarded = ['id'];

    public function getColorCategory()
    {
        return $this->belongsTo(ColorCategory::class, 'category_id');
    }

    public function getGallery()
    {
        return $this->hasMany(Gallery::class, 'color_id');
    }
}
