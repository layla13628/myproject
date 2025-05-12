<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'stocke',
        'categories_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTO('categories_id','id');
    }
}
