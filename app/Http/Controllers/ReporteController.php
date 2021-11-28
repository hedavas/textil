<?php

namespace App\Http\Controllers;
use DB;

use App\Tela;
use App\User;
use App\Ancho;
use App\Sucursal;
use App\Umedida;
use App\Calidad;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function primeraCalidad()
    {
      
        $telas = Tela::join('ancho','tela.ancho_id','=','ancho.id')
            ->join('umedida','tela.umedida_id','=','umedida.id')
            ->join('sucursal','tela.sucursal_id','=','sucursal.id')
            ->join('calidad','tela.calidad_id','=','calidad.id')
            ->where('tela.calidad_id', '=', 1)
            ->get();


        return view('reporte.primeraCalidad' ,compact('telas'));
    }



    public function telaDefectuosa()
    {
      
        $telas = Tela::join('ancho','tela.ancho_id','=','ancho.id')
            ->join('umedida','tela.umedida_id','=','umedida.id')
            ->join('sucursal','tela.sucursal_id','=','sucursal.id')
            ->join('calidad','tela.calidad_id','=','calidad.id')
            ->where('tela.calidad_id', '<>', 1)
            ->get();


        return view('reporte.telaDefectuosa' ,compact('telas'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inventario()
        {
            $index = 1;
            $telas = Tela::join('ancho','tela.ancho_id','=','ancho.id')
            ->join('umedida','tela.umedida_id','=','umedida.id')
            ->join('sucursal','tela.sucursal_id','=','sucursal.id')
            ->join('calidad','tela.calidad_id','=','calidad.id')
            ->get();
            return view('reporte.inventario',compact('telas','index'));
        }


        public function index()
        {
            $index = 1;
            $telas = Tela::join('ancho','tela.ancho_id','=','ancho.id')
            ->join('umedida','tela.umedida_id','=','umedida.id')
            ->join('sucursal','tela.sucursal_id','=','sucursal.id')
            ->join('calidad','tela.calidad_id','=','calidad.id')
            ->get();
            return view('reporte.index',compact('telas','index'));
        }


        public function GraficaInv()
        {
              
        $telas = Tela::All();

        $puntos = [];

        foreach ($telas as $tela) {
             $puntos[] = ['name' => $tela['item'], 'y'=> $tela['cantidad']];
        }
        
      
        return view('reporte.graficaInv', ["data" => json_encode($puntos)]);

        }



         public function CostosInv()
            {
                  
            $telas = Tela::All();

            $puntos = [];

            foreach ($telas as $tela) {
                 $puntos[] = ['name' => $tela['item'], 'y'=> $tela['costo_unitario']];
            }
            
          
            return view('reporte.costosInv', ["data" => json_encode($puntos)]);

            }


        public function graficaPorLocalidad()
            {
                  
            $telas = Tela::All();

            $puntos = [];

            foreach ($telas as $tela) {
                 $puntos[] = ['name' => $tela['sucursal_id'], 'y'=> $tela['cantidad']];
            }
            
          
            return view('reporte.graficaPorLocalidad', ["data" => json_encode($puntos)]);

            }


    public function verlocalidad($id)
        {
               //  $telas = Sucursal::findOrFail($id);

                  $telas = Tela::join('ancho','tela.ancho_id','=','ancho.id')
                    ->join('umedida','tela.umedida_id','=','umedida.id')
                    ->join('sucursal','tela.sucursal_id','=','sucursal.id')
                    ->join('calidad','tela.calidad_id','=','calidad.id')
                    //->where('tela.sucursal_id', '=', $id);
                    ->get();


            return view('reporte.verSucursal',compact('telas'));



        }

    public function localidad1()
        {
            $telas = Tela::join('ancho','tela.ancho_id','=','ancho.id')
            ->join('umedida','tela.umedida_id','=','umedida.id')
            ->join('sucursal','tela.sucursal_id','=','sucursal.id')
            ->join('calidad','tela.calidad_id','=','calidad.id')
            ->get();
            return view('reporte.localidad',compact('telas'));
        }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
