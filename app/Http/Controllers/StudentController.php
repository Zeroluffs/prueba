<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function list()
    {
      return Student::all()->with(['universidad']);
    }

    public function create()
    {
      $e = new Student();
      $e->nombres = request('nombres');
      $e->apellidos = request('apellidos');
      $e->universidad_id = request('universidad');
      $e->save();
      return response()->json("Estudiante creado con éxito.");
    }
}
