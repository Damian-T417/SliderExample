<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'image',//2.- Agregar el campo que agregamos en la migración
    ];
}
