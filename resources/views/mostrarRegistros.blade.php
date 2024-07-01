<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Registros</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/mostrarRegistros.css">
</head>
<body>
    <div id="container">
        @foreach($registros as $registro)
            @if ($registro instanceof \App\Models\Duenio)
                <div class="item" >
                    <span>{{$registro->idDuenio}}</span>
                    <span>{{$registro->nombre}}</span>
                    <span>{{$registro->apellido}}</span>
                    <span>{{$registro->correo}}</span>
                    <span>{{$registro->telefono}}</span>
                </div>
            @elseif ($registro instanceof \App\Models\Propiedade)
                <div class="item" >
                    <span>{{$registro->id}}</span>
                    <span>{{$registro->piso}}</span>
                    <span>{{$registro->area}}</span>
                    <span>{{$registro->color}}</span>
                    <span>{{$registro->idDuenio}}</span>
                </div>
            @endif
        @endforeach
    </div>
</body>
</html>
