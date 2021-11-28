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

class TelaController extends Controller
{
    

function __construct()
  {

    $this->middleware('auth');
    $this->middleware('roles:1');
  }


    public function index(){
       $tela = Tela::with('ancho')->get();
       $titulo ='Inventario de Telas';
      
        return view('tela.index', 
        [
               'tela' => $tela,
               'title' => $titulo    
       ]);
    }

   public function show($id){
          $tela = Tela::findOrFail($id);
          return view('tela.show', compact('tela'));
   }

   public function create(){
          
         $ancho = Ancho::all(); 
         $umedida = Umedida::all(); 
         $sucursal = Sucursal::all(); 
         $calidad = Calidad::all(); 
         return view('tela.create', compact('ancho', 'umedida', 'sucursal', 'calidad' ));
   }

   public function store(){
       
       $data = request()->validate([
              'item' => 'required',
              'cantidad' => 'required',
              'descripcion' => 'required',
              'ancho' => 'required',
              'umedida' => 'required',
              'sucursal' => 'required',
              'calidad' => 'required',
              'costo_unitario' => 'required',
              'status' => 'required',
              'user' => 'required'
       ],
       [
              
              'item' => 'El campo Item es obligatorio',
              'cantidad' => 'El campo Item es obligatorio',
              'descripcion' => 'El campo Descripcion es obligatorio',
              'ancho' => 'El campo Ancho es obligatorio',
              'umedida' => 'El campo UOM es obligatorio',
              'sucursal' => 'El campo Sucursal es obligatorio',
              'calidad' => 'El campo Calidad es obligatorio',
              'costo_unitario' => 'El campo Costo Unitario es obligatorio',
              'status' => 'El campo Costo Unitario es obligatorio',
              'user' => 'El campo Costo Unitario es obligatorio'

        ]
       );


    

       Tela::create([
             

              'item' => $data['item'],
              'cantidad' => $data['cantidad'],
              'descripcion' => $data['descripcion'],
              'ancho_id' => $data['ancho'],
              'umedida_id' => $data['umedida'],
              'sucursal_id' => $data['sucursal'],
              'calidad_id' => $data['calidad'],
              'costo_unitario' => $data['costo_unitario'],
              'status' => $data['status'],
              'user_id' => $data['user']
       ]);

       return redirect('/tela/');

   }


   public function editar(Tela $tela){

         $calidad = Calidad::pluck('codigo', 'id'); 
         $umedida = Umedida::pluck('medida', 'id'); 
         $sucursal = Sucursal::pluck('nombre', 'id');
         $ancho = Ancho::pluck('ancho', 'id'); 


         

          return view('tela.editar', ['tela' => $tela],  compact('calidad', 'umedida',  'ancho',  'sucursal'));
   }

   public function actualizar(Tela $tela){
       $data = request()->all();

       $data['item'] = $data['item'];
       
       $data['descripcion'] = $data['descripcion'];
       $data['ancho_id'] = $data['ancho'];
       $data['umedida_id'] = $data['medida'];
       $data['calidad_id'] = $data['calidad'];
       $data['sucursal_id'] = $data['sucursal'];
       $data['costo_unitario'] = $data['costo_unitario'];
       $tela->update($data);
      

       return redirect("/tela/{$tela->id}");
   }

   public function destroy(Tela $tela){
       $tela->delete();
       return redirect("tela");
   }


}
