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
        <button type="button" class="btn btn-outline-success">Aprobar</button>
        <button type="button" class="btn btn-outline-danger">Rechazar</button>
        <button type="button" class="btn btn-warning">Modificar</button>
    </div>
    <form>
        <div class="col-6 mb-3">
            <label for="zona_de_comentario" class="form-label">Ingrese un comentario a la propuesta</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <button type="submit" class="m-3 p-0 btn btn-outline-info">Agregar Comentario</button>
          </div>
    </form>

@endsection
