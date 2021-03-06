<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=[
        'category_id',
        'name',
        'price',
        'discription',
        'photo',
        'offic'
    ];
    public function category(){
        return $this->hasOne(Category::class,'id', 'category_id');
    }
}
