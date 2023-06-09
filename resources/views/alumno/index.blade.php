
@extends('layouts.master')

@section('contenido-principal')

    <div class="container bg-light">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Bienvenido a la vista Alumnos</h3>
            </div>
        </div>
    </div>
    <div class="container bg-success">
        <div class="row">
            <div class="col">
                <h4>Ingrese su propuesta</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <button class="btn btn-warning" type="button" id="inputGroupFileAddon04">Subir</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" style="background-color: yellowgreen;">En Revisión</button>
                    <button type="button" class="list-group-item list-group-item-action">Modificar</button>
                    <button type="button" class="list-group-item list-group-item-action">Aprobado</button>
                    <button type="button" class="list-group-item list-group-item-action">RECHAZADO UWU</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <a href="https://elinf.usm.cl/wp-content/uploads/2021/01/fondo-carreras-2048x1239.jpg" target="_blank" class="btn btn-outline-primary btn-lg">YO ESTUDIO AQUÍ</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>INGRESE COMENTARIOS___ PROFE POR FAVOR PÓNGAME UN 100.000.000.000.000.000.000.000</h1>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">COMENTARIOS</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-dark">COMENTAR</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <hr>

@endsection
