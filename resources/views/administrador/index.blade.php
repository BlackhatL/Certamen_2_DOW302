@extends('layouts.master')

@section('contenido-principal')

    <div class="container container-fluid bg-light">

        <div class="row">
            <div class="col-12 text-center">
                <h3>Bienvenido a la vista de Administrador</h3>
            </div>
        </div>
        

        <div class="row">

            <div class="col-12 col-lg-8 order-last order-lg-first text-center">
                <div class="col-12 text-center">
                    <h3>Estudiantes</h3>
                </div>
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
            </div>
        </div>
    </div>

@endsection