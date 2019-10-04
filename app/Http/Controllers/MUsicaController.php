<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musica;

class MUsicaController extends Controller
{
    //
    public function index()
    {
    	$musica = new Musica();
    	$cancion = $musica->getCancion();
    	
    	return view('ejemplo', compact('cancion'));
    }
}
