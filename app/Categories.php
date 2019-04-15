<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table='categories';
    protected $fillable=[
      'name',
      'position',
      'office',
      'description',
      'start_date',
      'salary',
    ];
}
