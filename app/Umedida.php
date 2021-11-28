<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Umedida extends Model
{
     protected $table = 'umedida';


        protected $fillable = [
        'medida',
    ];

}
