<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap-custom.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Equipos</title>
</head>

<body class="bg-dark">
    <h1 class="container text-center text-white">Página Principal</h1>
    <div class="container text-center">
        <div class="row h-100">
            <!--CARD ALUMNO-->
            <!--CON ESTA PURA LINEA PUDE CENTRAR ESTA PORQUERIA-->
            <div class="card-group position-absolute top-50 end-0 translate-middle-y">
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-success h-100">
                        <div class="card-body">
                            <h4 class="card-title">Alumno</h4>
                            <p class="card-text">Vista del Alunmo, donde se puede subir y eliminar archivos PDF</p>
                            <a href="Alumno.html" class="btn btn-secondary">Ingresar</a>
                        </div>
                    </div>

                </div>
                <!--CARD PROFESOR-->
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-primary h-100">
                        <div class="card-body">
                            <h4 class="card-title">Profesor</h4>
                            <p class="card-text">Vista del Profesor, donde se puede revisar y comentar los archivos PDF de los alumnos</p>
                            <a href="Alumno.html" class="btn btn-secondary">Ingresar</a>
                        </div>
                    </div>

                </div>
                <!--CARD ADMINISTRADOR-->
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-warning">
                        <div class="card-body">
                            <h4 class="card-title">Administrador</h4>
                            <p class="card-text">Vista del Administrador, donde se puede gestionar profesores, estudiantes y el estado de las propuestas</p>
                            <a href="Administrador.html" class="btn btn-secondary">Ingresar</a>
                        </div>
                    </div>


                </div>
            </div>


        </div>

    </div>







    @yield('contenido-principal')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
</body>

</html>
