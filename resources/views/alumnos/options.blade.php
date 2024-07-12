<!DOCTYPE html>
<html>
<head>
    <title>Opciones de Personas</title>
</head>
<body>
    <h1>Opciones de Personas</h1>
    @include('menu')
    <ul>
        <li><a href="{{ route('alumnos.index') }}">Ver Listado de Personas</a></li>
        <li><a href="{{ route('alumnos.create') }}">Agregar Nueva Persona</a></li>
        <li><a href="{{ route('alumnos.search') }}">Editar Persona</a></li>
    </ul>
</body>
</html>
