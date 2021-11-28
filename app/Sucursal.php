<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Sucursal extends Model
{
     protected $table = 'sucursal';


        protected $fillable = [
        'nombre', 'direccion',
    ];

}
