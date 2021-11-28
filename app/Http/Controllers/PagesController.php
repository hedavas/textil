<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

public function home()
{
	return view('home');
}



public function contacto()
{
	return view('contacto');
}

public function registrarInv()
{
	return view('registrarInv');
}

public function consultarInv()
{
	return view('consultarInv');
}

public function registrarQu()
{
	return view('registrarQu');
}

public function medidas()
{
	return view('medidas');
}

public function registrarUsuario()
{
	return view('registrarUsuario');
}

public function sucursal()
{
	return view('sucursal');
}
}
