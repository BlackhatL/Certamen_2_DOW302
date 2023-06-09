<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap-custom.min.css">
    <title>Administrador</title>
</head>
<body class="bg-dark">
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <h3>Estudiantes</h3>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-lg-8 order-last order-lg-first">
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
    </div>
</body>
</html>