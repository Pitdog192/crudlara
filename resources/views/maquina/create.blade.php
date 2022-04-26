<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mio.css') }}" rel="stylesheet">
    <title>Cargar Maquinas</title>
</head>
<body class="content-fluid bg-dark">
    <div class="container-fluid head bg-dark">
        <h1>Cargar maquinas</h1> 
    </div>
    <div class="container formCreacion">
        <form action="{{ url('/maquina') }}" method="POST">
        @csrf
        @include('maquina.form')
        </form> 
    </div>
          
</body>
</html>