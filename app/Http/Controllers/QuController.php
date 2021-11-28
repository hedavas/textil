<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Calidad;

class QuController extends Controller
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
        $qu = Calidad::All();
        $title = 'Informe de Codigos de Calidad';
      
        return view('Qu.index', 
        [
               'qu' => $qu,
               'title' => $title    
       ]);





            
        return view('qu.index',compact('qu') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Qu.create');
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



        DB::table('calidad')->insert([
            "codigo" => $request->input("txtCodigo"),
            "description" => $request->input("txtDescripcion"),
           ]);

        return redirect('/Qu/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             $qu = Calidad::findOrFail($id);

        return view('Qu.show',compact('qu'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function editar(Calidad $calidad){
          return view('Qu.editar', ['calidad' => $calidad]);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function actualizar(Calidad $calidad){
       $data = request()->all();
       $data['codigo'] = $data['txtCodigo'];
       $data['description'] = $data['txtDescripcion'];
       $calidad->update($data);
       return redirect("/Qu/{$calidad->id}");
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy(Calidad $calidad){
       $calidad->delete();
       return redirect("Qu");
   }
}
