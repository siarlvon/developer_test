<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0ef2d5ccd8.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1>
                    test-developer-app
                </h1>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('cliente.create') }}" class="btn btn-primary">Crear un cliente</a>
                <a href="{{ route('direccion.create') }}" class="btn btn-primary">Crear una dirección al cliente</a>
                <a href="{{ route('venta.create') }}" class="btn btn-primary">Crear una venta al cliente</a>
                <a href="{{ route('venta.index') }}" class="btn btn-primary">Listar ventas</a>
            </div>
            <div class="col-sm-12 d-inline p-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>

</html>
