@extends('layouts.master')

@section('contenido-principal')



    <h1 class="container-fluid text-center text-white">Página Principal</h1>
    <div class="container text-center">
        <div class="row h-100">
            <!--CARD ALUMNO-->
            <!--CON ESTA PURA LINEA SE CENTRA EL CONTENIDO-->
            <div class="card-group position-absolute top-50 end-0 translate-middle-y">
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-success h-100">
                        <div class="card-body">
                            <h4 class="card-title">Alumno</h4>
                            <p class="card-text">Vista del Alunmo, donde se puede subir y eliminar archivos PDF</p>
                            <a href="{{route('alumno.index')}}" class="btn btn-light">Ingresar</a>
                        </div>
                    </div>

                </div>
                <!--CARD PROFESOR-->
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-info h-100">
                        <div class="card-body">
                            <h4 class="card-title">Profesor</h4>
                            <p class="card-text">Vista del Profesor, donde se puede revisar y comentar los archivos PDF de los alumnos</p>
                            <a href="{{route('profesor.index')}}" class="btn btn-light">Ingresar</a>
                        </div>
                    </div>

                </div>
                <!--CARD ADMINISTRADOR-->
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-danger">
                        <div class="card-body">
                            <h4 class="card-title">Administrador</h4>
                            <p class="card-text">Vista del Administrador, donde se puede gestionar profesores, estudiantes y el estado de las propuestas</p>
                            <a href="{{route('administrador.index')}}" class="btn btn-light">Ingresar</a>
                        </div>
                    </div>


                </div>
            </div>


        </div>

    </div>







    @yield('contenido-principal')


@endsection
