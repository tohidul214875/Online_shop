<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    protected $table='settings';
    protected $fillable=[
        'key',
        'value'
    ];
}
