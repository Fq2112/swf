<?php

namespace App\Models;

use App\Models\ColorCode;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $guarded = ['id'];

    public function getColorCode()
    {
        return $this->belongsTo(ColorCode::class, 'color_id');
    }
}
