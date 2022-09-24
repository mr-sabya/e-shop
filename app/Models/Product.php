<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'details',
        'short_details',
        'image',
        'category_id',
        'price',
        'old_price',
    ];


    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
