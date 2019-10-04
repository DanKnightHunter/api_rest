<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas;

class AreasController extends Controller
{
    //
    public function index()
    {
    	//enviar areas a la vista
    	$areas = Areas::all();
    	$areas3first = Areas::where('Id_Area', 3)->first();
    	$areas3 = Areas::where('Id_Area', 3)->get();
    	return $areas3;

    }
}
