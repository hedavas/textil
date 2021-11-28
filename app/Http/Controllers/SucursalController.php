<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sucursal;

class SucursalController extends Controller
{


  function __construct()
  {

    $this->middleware('auth');
    $this->middleware('roles:1');
  }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sucursal = Sucursal::All();
        $title = 'Informe de Sucursales';
      
        return view('sucursal.index', 
        [
               'sucursal' => $sucursal,
               'title' => $title    
       ]);

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sucursal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $data = request()->all();

//        if (empty($data['txtCodigo'])) {
            # code...
//            return redirect('/Qu/create');

 //       }

  //      Calidad::create([
  //          'codigo' => $data['txtCodigo'],
  //          'description' => $data['txtDescripcion']

  //          ]);

 //       return redirect('/Qu/');

        //


        DB::table('sucursal')->insert([
            "nombre" => $request->input("txtNombre"),
            "direccion" => $request->input("txtDireccion"),
           ]);

        return redirect('/sucursal/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             $sucursal = Sucursal::findOrFail($id);

        return view('sucursal.show',compact('sucursal'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function editar(Sucursal $sucursal){
          return view('sucursal.editar', ['sucursal' => $sucursal]);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function actualizar(Sucursal $sucursal){
       $data = request()->all();
       $data['nombre'] = $data['txtNombre'];
       $data['direccion'] = $data['txtDireccion'];
       $sucursal->update($data);
       return redirect("/sucursal/{$sucursal->id}");
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy(Sucursal $sucursal){
       $sucursal->delete();
       return redirect("sucursal");
   }
}
