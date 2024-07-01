<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Duenio</title>
</head>
<body>
    <section>
        <div>{{$duenio->nombre}}</div>
        <div>{{$duenio->apellido}}</div>
        <div>{{$duenio->correo}}</div>
    </section>
    <style>
        section{
            display: flex;
            width: 100vw;
            height: 100vh;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</body>
</html>