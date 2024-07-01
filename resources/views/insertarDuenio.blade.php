<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Duenio</title>
    <link rel="stylesheet" href="../../resources/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../resources/css/insertarDuenio.css">
    <script src="../../resources/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</head>
<body>
    <section id="mainContainer">
        <div id="formWrapper" class="col-4">
            <form action="{{route('duenio.agregar')}}" method="post" class="row gy-4">
                @csrf
                <div>
                    <input id="nombre" type="text" name="nombre" class="form-control col-4" placeholder="nombre" required>
                </div>
                <div>
                    <input id="apellido" type="text" name="apellido" class="form-control col-4" placeholder="apellido" required>
                </div>
                <div>
                    <input id="correo" type="text" name="correo" class="form-control col-4" placeholder="email" required>
                </div>
                <button class="btn btn-light" type="submit">Agregar</button>
            </form>
        </div>
    </section>
</body>
</html>
