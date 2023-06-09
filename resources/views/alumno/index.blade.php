
@extends('layouts.master')

@section('contenido-principal')

    <div class="container bg-success">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Bienvenido a la vista Alumnos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <h4>Ingrese su propuesta</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6 col-lg-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">Subir propuesta</div>
                    <div class="card-body">
                        <form method="POST" action={{route('alumnos.store')}} enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="estudiante_rut" class="form-label">Rut del estudiante</label>
                                <input type="text" id="estudiante_rut" name="estudiante_rut" class="form-control">
                            </div>
                            <div class="input-group">
                                <input type="file" name="documento" class="form-control" id="documento" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                <button class="btn btn-warning" type="sumbit" id="documento">Subir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">Retroalimentación de Profesores</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover bg-success">
                            <tr>
                                <th class="align-middle text-nowrap">Id</th>
                                <th class="align-middle text-nowrap">Rut Del Profesor</th>
                                <th class="align-middle text-nowrap">Fecha</th>
                                <th class="align-middle text-nowrap">Hora</th>
                                <th class="align-middle text-nowrap">Comentario</th>
                            </tr>
                            <tbody>
                                @foreach ($profesor_propuesta as $profesor_propuesta)
                                <tr>
                                    <td class="align-middle text-nowrap">{{$profesor_propuesta->propuesta_id}}</td>
                                    <td class="align-middle text-nowrap">{{$profesor_propuesta->profesor_rut}}</td>
                                    <td class="align-middle text-nowrap">{{$profesor_propuesta->fecha}}</td>
                                    <td class="align-middle text-nowrap">{{$profesor_propuesta->hora}}</td>
                                    <td class="align-middle text-nowrap">{{$profesor_propuesta->comentario}}</td>
                                </tr>
                                @endforeach
                            </tbody>
    
    
                        </table>
                    </div>
                </div>
                
            </div>
        </div>


    </div>
@endsection
