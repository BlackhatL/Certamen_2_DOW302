<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiantes;
use App\Models\propuesta;
use App\Models\profesor_propuesta;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AlumnosController extends Controller
{
    public function index(){
        $estudiantes = estudiantes::all();
        $profesor_propuesta = profesor_propuesta::all();
        return view('alumno.index',compact('estudiantes','profesor_propuesta'));
    }

    public function store( propuesta $propuestas,Request $request){

        $propuestas = new propuesta();
        $propuestas->estudiante_rut = $request->estudiante_rut;
        $propuestas->fecha = Carbon::now();

        if($request->hasFile('documento')){
           $documento = $request->file('documento');
           $rutaDocumento = $documento->store('/public/PDF','public');
           $propuestas->documento = $rutaDocumento;
        }

        $propuestas->estado = 0;
        $propuestas->save();
        return redirect()->route('home.index');
    }
    
}
