<?php

namespace App\Http\Controllers;

use App\Roll;
use Illuminate\Http\Request;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{



  function __construct()
  {

    $this->middleware('auth');
    $this->middleware('roles:1', ['except' => ['editar', 'actualizar', 'show']]);
  }


    
    public function index(){

       $users = User::all();
       $titulo ='Informe de Usuarios';
      
        return view('usuarios.index', 
        [
               'users' => $users,
               'title' => $titulo    
       ]);
    }

   public function show($id){
          $user = User::findOrFail($id);
          return view('usuarios.show', compact('user'));
   }

   public function create(){
          
         $roll = Roll::all(); 
          return view('usuarios.create', compact('roll'));
   }

   public function store(){
       
       $data = request()->validate([
              'name' => 'required',
              'email' => ['required', 'email', 'unique:users,email'],
              'roll_id' => 'required',
              'password' => 'required'
       ],
       [
              'name.required' => 'El campo nombre es obligatorio',
              'email.required' => 'El campo email es obligatorio',
              'password.required' => 'El campo password es obligatirio',
              'roll_id.required' => 'El campo id Roll es obligatirio'
       ]
       );



       User::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'roll_id' => $data['roll_id'],
              'password' => bcrypt($data['password'])
       ]);

       return redirect('/usuarios/');

   }


   public function editar(User $user){

         $roll = Roll::all(); 
        return view('usuarios.editar', ['user' => $user],  compact('roll'));
   }

   public function actualizar(User $user){
       $data = request()->all();
       $data['password'] = bcrypt($data['password']);
       $user->update($data);
       return redirect("/usuarios/{$user->id}");
   }

   public function destroy(User $user){
       $user->delete();
       return redirect("usuarios");
   }


}
