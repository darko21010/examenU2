<!DOCTYPE html>
<html>
<head>
    <title>Crear Alumno</title>
</head>
<body>
    <h1>Crear Alumno</h1>
    @include('menu')

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" value="{{ old('Apellido') }}" >
        {{ $errors->first('Apellido') }}
        <br><br>
        
        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" value="{{ old('Nombre') }}" >
        {{ $errors->first('Nombre') }}
        <br><br>

        <label for="Curso">Curso:</label>
        <input type="text" id="Curso" name="Curso" value="{{ old('Curso') }}" >
        {{ $errors->first('Curso') }}
        <br><br>
        
        <label for="Nota1">Nota1:</label>
        <input type="text" id="Nota1" name="Nota1" value="{{ old('Nota1') }}" >
        {{ $errors->first('Nota1') }}
        <br><br>
        
        <label for="Nota2">Nota2:</label>
        <input type="text" id="Nota2" name="Nota2" value="{{ old('Nota2') }}" >
        {{ $errors->first('Nota2') }}
        <br><br>
        <!--
        <label for="nPerEdad">Edad:</label>
        <input type="number" id="nPerEdad" name="nPerEdad" value="{{ old('nPerEdad') }}" >
        {{ $errors->first('nPerEdad') }}
        <br><br>
        
        <label for="nPerSueldo">Sueldo:</label>
        <input type="number" id="nPerSueldo" name="nPerSueldo" value="{{ old('nPerSueldo') }}" >
        {{ $errors->first('nPerSueldo') }}
        <br><br>
        
        <label for="cPerRnd">Rnd:</label>
        <input type="text" id="cPerRnd" name="cPerRnd" value="{{ old('cPerRnd') }}" >
        {{ $errors->first('cPerRnd') }}
        <br><br>
        
        <label for="nPerEstado">Estado:</label>
        <select id="nPerEstado" name="nPerEstado" >
            <option value="1" {{ old('nPerEstado') == '1' ? 'selected' : '' }}>1</option>
            <option value="0" {{ old('nPerEstado') == '0' ? 'selected' : '' }}>0</option>
        </select>
        {{ $errors->first('nPerEstado') }}
        <br><br>
        -->
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
