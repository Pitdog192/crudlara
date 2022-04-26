<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mio.css') }}" rel="stylesheet">
    <title>Grilla</title>
</head>
<body class="container-fluid p-0">
    <div class="container-fluid bg-dark">
        <h1 class="text-white">Grilla de maquinas</h1>
        <div>
            <nav class="container text-md-end">
                <a href="{{ url('/') }}" class="btn btn-primary col-lg-2" role="button">Inicio</a>
                <a href="{{ url('/maquina/create') }}" class="btn btn-primary col-lg-2" role="button">Cargar nueva</a>
                <a href="{{ url('/maquina') }}" class="btn btn-danger col-lg-2" role="button">Sacar filtro</a>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <form action=" {{ url('maquinas/importar') }} " method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="documento">
                            <button class="btn btn-primary" type="submit">Importar</button>
                        </form>
                        <button class="btn btn-danger">Exportar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <form>
                        <th scope="col">#</th>
                        <th scope="col"><input type="text" name="buscaPro"  placeholder="Procesador"></th>
                        <th scope="col"><input type="text" name="buscaRam"  placeholder="Ram"       ></th>
                        <th scope="col"><input type="text" name="buscaWin"  placeholder="Windows"   ></th>
                        <th scope="col"><input type="text" name="buscaAr"   placeholder="Área"      ></th>
                        <th scope="col"><input type="text" name="buscaSec"  placeholder="Sector"    ></th>
                        <th scope="col"><input type="text" name="buscaUs"   placeholder="Usuario"   ></th>
                        <th scope="col"><input type="text" name="buscaInv"  placeholder="Inventario"></th>
                        <th scope="col" id="escribir"></th>
                        <th scope="col"><button class="btn btn-primary" type="submit" id="boton1">Buscar</button></th>
                    </form>    
                </tr>
            </thead>
            <tbody>
                @foreach ($maquinas as $maquina)
                <tr>
                    <td>{{ $maquina->id }}</td>
                    <td>{{ $maquina->procesador }}</td>
                    <td>{{ $maquina->ram }}</td>
                    <td>{{ $maquina->windows }}</td>
                    <td>{{ $maquina->area }}</td>
                    <td>{{ $maquina->sector }}</td>
                    <td>{{ $maquina->usuario }}</td>
                    <td>{{ $maquina->inventario }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{ url('/maquina/'.$maquina->id.'/edit') }}">Editar</a>    
                    </td>
                    <td>
                        <form action="{{ url('/maquina/'.$maquina->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Borrar?')" class="btn btn-danger btn-sm">Borrar</button>
                        </form>    
                    </td>
                </tr> 
                @endforeach

            </tbody>
        </table>    
    </div>
    <div class="d-flex justify-content-center">
        {{ $maquinas->links() }}
    </div>
    <script type="text/javascript" src="{{ asset('js/js.js') }}"></script>
</body>
</html>