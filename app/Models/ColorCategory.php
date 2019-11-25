<?php

namespace App\Models;

use App\Models\ColorCode;
use Illuminate\Database\Eloquent\Model;

class ColorCategory extends Model
{
    protected $table = 'color_categories';

    protected $guarded = ['id'];

    public function getColorCode()
    {
        return $this->hasMany(ColorCode::class, 'category_id');
    }
}
