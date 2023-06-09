<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiantes;
use App\Models\profesor;

class AdministradorController extends Controller
{
    public function index(){
        $estudiantes = estudiantes::all();
        $profesores = profesor::all();
        return view('administrador.index',compact('estudiantes','profesores'));
    }
    public function show(estudiantes $estudiantes){
        return view('alumno.show',compact('estudiantes'));
    }
    public function editestudiante(estudiantes $estudiantes){
        $estudiantes = estudiantes::all();
        return view('administrador.editestudiante',compact('estudiantes'));
    }
    
    public function editprofe(profesor $profesores){
        $profesores = profesor::all();
        return view('administrador.editprofesor',compact('profesores'));
    }


}
