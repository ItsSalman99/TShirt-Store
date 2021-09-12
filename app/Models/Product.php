<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'slug',
        'name',
        'img',
        'color',
        'size',
        'rating',
        'description',
        'amount',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
