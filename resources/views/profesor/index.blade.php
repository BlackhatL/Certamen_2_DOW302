@extends('layouts.master')

@section('contenido-principal')


    <div class="container bg-light ">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Bienvenido a la vista Profesores</h3>
            </div>
        </div>
    </div>
    

    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-success">Aprobar</button>
        <button type="button" class="btn btn-danger">Rechazar</button>
        <button type="button" class="btn btn-warning">Modificar</button>
    </div>
    <div>
        <button type="button" class="btn btn-info">Agregar Comentario</button>
    </div>

@endsection
