<?php

namespace App\Http\Controllers;

use App\Tela;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Ancho;
use App\Sucursal;
use App\Umedida;
use App\Calidad;

class TransactionController extends Controller
{
    

function __construct()
  {

    $this->middleware('auth');
  }


    public function index(){
       $tela = Tela::where('status', '=', 1)->get();

        $titulo ='Transacciones';
      
        return view('transaction.index', 
        [
               'tela' => $tela,
               'title' => $titulo    
       ]);
    }

   public function show($id){
          $tela = Tela::findOrFail($id);
          return view('transaction.show', compact('tela'));
   }


   public function editarSucursal(Tela $tela){

         $calidad = Calidad::pluck('codigo', 'id'); 
         $umedida = Umedida::pluck('medida', 'id'); 
         $sucursal = Sucursal::pluck('nombre', 'id');
         $ancho = Ancho::pluck('ancho', 'id'); 


         

          return view('transaction.mover', ['tela' => $tela],  compact('calidad', 'umedida',  'ancho',  'sucursal'));
   }


        public function editarCalidad(Tela $tela){

                 $calidad = Calidad::pluck('codigo', 'id'); 
                 $umedida = Umedida::pluck('medida', 'id'); 
                 $sucursal = Sucursal::pluck('nombre', 'id');
                 $ancho = Ancho::pluck('ancho', 'id'); 


                 

                  return view('transaction.cambiarCalidad', ['tela' => $tela],  compact('calidad', 'umedida',  'ancho',  'sucursal'));
           }


   public function actualizarSucursal(Tela $tela){
       $data = request()->all();
      
       $data['sucursal_id'] = $data['sucursal'];
       $tela->update($data);
      

       return redirect("/transaction/{$tela->id}");
   }


    public function actualizarCalidad(Tela $tela){
       $data = request()->all();
      
      $data['calidad_id'] = $data['calidad'];
       $tela->update($data);
      

       return redirect("/transaction/{$tela->id}");
   }


   public function darAlta(Tela $tela){
       $baja = 1;
      
      $data['status'] = $baja;
       $tela->update($data);
      

       return redirect("/transaction/{$tela->id}");
   }


   public function darBaja(Tela $tela){
       $baja = 2;
      
      $data['status'] = $baja;
       $tela->update($data);
      

       return redirect("/transaction/{$tela->id}");
   }

   public function darBajaA(Tela $tela){
       $baja = 2;
      
      $data['status'] = $baja;
       $tela->update($data);
      

       return redirect("/tela/{$tela->id}");
   }

   public function destroy(Tela $tela){
       $tela->delete();
       return redirect("tela");
   }


}
