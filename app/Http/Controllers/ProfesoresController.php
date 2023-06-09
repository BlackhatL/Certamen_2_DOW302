<?php

namespace App\Http\Controllers;
use App\Models\propuesta;
use App\Models\profesor;
use App\Models\profesor_propuesta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function index(){
        $propuestas = propuesta::all();
        $profesor_propuesta = profesor_propuesta::all();
        return view('profesor.index',compact('propuestas','profesor_propuesta'));
    }

    public function show(propuesta $propuestas){
        return view('propuesta.show',compact('propuestas'));
    }

    public function store(Request $request){
        $profesor_propuesta = new profesor_propuesta();
        $profesor_propuesta->propuesta_id = $request->propuesta_id;
        $profesor_propuesta->profesor_rut = $request->profesor_rut;
        $profesor_propuesta->fecha = Carbon::now();
        $profesor_propuesta->hora = Carbon::now();
        $profesor_propuesta->comentario = $request->comentario;
        $profesor_propuesta->save();
        return redirect()->route('home.index');

    }

        
    
}
