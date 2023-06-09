<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiantes;

class AlumnosController extends Controller
{
    public function index(){
        $estudiantes = estudiantes::all();
        return view('alumno.index',compact('estudiantes'));
    }

}
