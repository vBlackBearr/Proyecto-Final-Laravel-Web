<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detalles del Mecánico</title>
    @include('template.encabezado')
</head>

<body>
    @include('template.navbar')
    <h1>Detalles del Mecánico</h1>
    <br />
    <h1>Vista</h1>

    <h2>Nombre: {!! $parametros->nombre !!}</h2>

    <h2>apellido paterno: {!! $parametros->apPaterno !!}</h2>
    <h2>apellido materno: {!! $parametros->apMaterno !!}</h2>
    <h2>fecha contratacion: {!! $parametros->fecha_contratacion !!}</h2>
    <h2>salario: {!! $parametros->salario !!}</h2>
    <h2>Estatus: {!! $parametros->estatus !!}</h2>
</body>
</html>

