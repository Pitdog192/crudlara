<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mio.css') }}" rel="stylesheet">
    <title>Editar</title>
</head>
<body class="content-fluid bg-dark">
    <div class="container-fluid head bg-dark">
        <h1>Editar</h1>
    </div>
    <div class="container">
        <form action="{{ url('/maquina/'.$maquina->id) }}" method="POST">
            @csrf
            {{ method_field('PATCH')}}
            @include('maquina.form')
        </form>
    </div>
</body>
</html>    