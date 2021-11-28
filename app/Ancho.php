<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Ancho extends Model
{
     protected $table = 'ancho';


        protected $fillable = [
        'ancho',
    ];



    public function tela()
    {

    	return $this->belongsTo(Tela::class);
    }
}
