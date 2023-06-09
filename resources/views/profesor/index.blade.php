@extends('layouts.master')

@section('contenido-principal')


    <div class="container bg-light ">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Bienvenido a la vista Profesores</h3>
            </div>
        </div>
    </div>

    <div class="container bg-light">
        <div class="row justify-content-end">
            <div class="col-4">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success">Aprobar</button>
                    <button type="button" class="btn btn-danger">Rechazar</button>
                    <button type="button" class="btn btn-warning">Modificar</button>
                </div>
                <hr>
                <form>
                    <div class="row justify-content-end">
                        <div class="col">
                            <div class="mb-3">
                                <label for="zona_de_comentario" class="form-label">Ingrese un comentario a la propuesta</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <hr>
                                <button type="submit" class="btn btn-info">Agregar Comentario</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>


@endsection
