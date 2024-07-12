<!DOCTYPE html>
<html>
<head>
    <title>Editar Alumno</title>
</head>
<body>
    <h1>Editar Alumno</h1>
    @include('menu')

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alumnos.update', $alumnos->nCodigo) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" value="{{ old('Apellido', $alumnos->Apellido) }}" required>
        <br><br>
        
        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" value="{{ old('Nombre', $alumnos->Nombre) }}" required>
        <br><br>
        
        <label for="Curso">Curso:</label>
        <input type="text" id="Curso" name="Curso" value="{{ old('Curso', $alumnos->Curso) }}" required>
        <br><br>
        
        <label for="Nota1">Nota1:</label>
        <input type="number" id="Nota1" name="Nota1" value="{{ old('Nota1', $alumnos->Nota1) }}" required>
        <br><br>
        
        <label for="Nota2">Nota2:</label>
        <input type="number" id="Nota2" name="Nota2" value="{{ old('Nota2', $alumnos->Nota2) }}" required>
        <br><br>
        
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
