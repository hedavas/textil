<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Calidad extends Model
{
     protected $table = 'calidad';


        protected $fillable = [
        'codigo', 'description',
    ];

}
