<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Tela extends Model
{
     protected $table = 'tela';


        protected $fillable = [
        'item', 'cantidad', 'descripcion', 'ancho_id', 'umedida_id', 'sucursal_id', 'calidad_id', 'costo_unitario', 'status', 'user_id',
            ];


    public function ancho()
    {

    	return $this->belongsTo(Ancho::class);
    }

    public function umedida()
    {

    	return $this->belongsTo(Umedida::class);
    }

    public function sucursal()
    {

    	return $this->belongsTo(Sucursal::class);
    }

    public function calidad()
    {

    	return $this->belongsTo(Calidad::class);
    }

}
