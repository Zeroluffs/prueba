<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class UniversityController extends Controller
{
    public function list(){
      return University::where('id', '>', '4')->get();
    }

    public function create(Request $request){
      $universidad = new University();
      $universidad->nombre = $request->nombre;
      $universidad->direccion = $request->direccion;
      $universidad->save();
      return response()->json("Universidad creado con éxito.");
    }
}
