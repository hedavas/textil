<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Roll extends Model
{
     protected $table = 'roll';


        protected $fillable = [
        'id','roll',
    ];

}
