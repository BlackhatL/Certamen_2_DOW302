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
        <div class="row">
            <div class="col-12 order-last order-lg-first text-center">
                <div class="col-12 text-center">
                    <h3>Propuestas</h3>
                </div>
                <table class="table table-bordered table-striped table-hover bg-success">
                    <thead>
                        <tr>
                            <th class="align-middle text-nowrap">id</th>
                            <th class="align-middle text-nowrap">Fecha</th>
                            <th class="align-middle text-nowrap">Documento</th>
                            <th class="align-middle text-nowrap">Estado</th>
                            <th class="align-middle text-nowrap">Rut Del Estudiante</th>
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($propuestas as $propuesta)
                        <tr>
                            <td class="align-middle">{{$propuesta->id}}</td>
                            <td class="align-middle text-nowrap">{{$propuesta->fecha}}</td>
                            <td class="align-middle">{{$propuesta->documento}}</td>
                            <td class="align-middle">{{$propuesta->estado}}</td>
                            <td class="align-middle text-nowrap">{{$propuesta->estudiante_rut}}</td>
                            <td class="align-middle text-nowrap">
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Agregar Comentario
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-light">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ingrese datos de la propuesta a comentar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action={{route('profesor_propuesta.store')}} enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="propuesta_id" class="form-label">Id de la propuesta</label>
                                                            <input type="integer" id="propuesta_id" name="propuesta_id" class="form-control">

                                                            <label for="profesor_rut" class="form-label">Rut del profesor</label>
                                                            <input type="string" id="profesor_rut" name="profesor_rut" class="form-control">
                                                        </div>
                                                        <label for="comentario" class="form-label">Ingrese un comentario a la propuesta</label>
                                                        <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="sumbit" class="btn btn-success text-white">Subir comentario</button>
                                                        </div>
                                                    </form>

                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection
