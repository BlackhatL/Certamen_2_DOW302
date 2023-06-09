@extends('layouts.master')

@section('contenido-principal')

    <div class="container container-fluid bg-light">

        <div class="row">
            <div class="col-12 text-center">
                <h3>Bienvenido a la vista de Administrador</h3>
            </div>
        </div>
        

        <div class="row">

            <div class="col-12 order-last order-lg-first text-center">
                <div class="card">
                    <div class="card-header bg-dark text-white" style="font-size: 30px">Estudiantes</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover bg-success">
                            <thead>
                                <tr>
                                    <th>Rut</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>E-mail</th>
                                    <th colspan="3">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($estudiantes as $estudiante)
                                <tr>
                                    <td class="align-middle">{{$estudiante->rut}}</td>
                                    <td class="align-middle">{{$estudiante->nombre}}</td>
                                    <td class="align-middle">{{$estudiante->apellido}}</td>
                                    <td class="align-middle">{{$estudiante->email}}</td>
                                    <td class="text-center" style="width: 1rem">
                                        <a href="{{route('administrador.editestudiante',$estudiante->rut)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                            data-bs-title="Editar {{$estudiante->nombre}} {{$estudiante->apellido}}">
                                            <span class="material-icons">Editar</span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                
                <div class="col-12 text-center">
                    <h3>Profesores</h3>
                </div>
                <table class="table table-bordered table-striped table-hover bg-success">
                    <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th colspan="3">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profesores as $profesor )
                        <tr>
                            <td class="align-middle">{{$profesor->rut}}</td>
                            <td class="align-middle">{{$profesor->nombre}}</td>
                            <td class="align-middle">{{$profesor->apellido}}</td>
                            <td class="text-center" style="width: 1rem">
                                <a href="{{route('administrador.editprofesor',$profesor->rut)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar {{$profesor->nombre}} {{$profesor->apellido}}">
                                    <span class="material-icons">Editar</span>
                                </a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>

                </table>
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
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success">Aprobar</button>
                                    <button type="button" class="btn btn-danger">Rechazar</button>
                                    <button type="button" class="btn btn-warning">Modificar</button>
                                </div>
                                <hr>
                            </td>


                        </tr>
                            
                        
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection