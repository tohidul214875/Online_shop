<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table='items';
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
