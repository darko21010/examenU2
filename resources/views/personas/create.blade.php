<!DOCTYPE html>
<html>
<head>
    <title>Crear Persona</title>
</head>
<body>
    <h1>Crear Persona</h1>
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

    <form action="{{ route('personas.store') }}" method="POST">
        @csrf
        <label for="cPerApellido">Apellido:</label>
        <input type="text" id="cPerApellido" name="cPerApellido" value="{{ old('cPerApellido') }}" required>
        
        <label for="cPerNombre">Nombre:</label>
        <input type="text" id="cPerNombre" name="cPerNombre" value="{{ old('cPerNombre') }}" required>
        
        <label for="cPerDireccion">Dirección:</label>
        <input type="text" id="cPerDireccion" name="cPerDireccion" value="{{ old('cPerDireccion') }}" required>
        
        <label for="dPerFecNac">Fecha de Nacimiento:</label>
        <input type="date" id="dPerFecNac" name="dPerFecNac" value="{{ old('dPerFecNac') }}" required>
        
        <label for="nPerEdad">Edad:</label>
        <input type="number" id="nPerEdad" name="nPerEdad" value="{{ old('nPerEdad') }}" required>
        
        <label for="nPerSueldo">Sueldo:</label>
        <input type="number" id="nPerSueldo" name="nPerSueldo" value="{{ old('nPerSueldo') }}" required>
        
        <label for="nPerEstado">Estado:</label>
        <select id="nPerEstado" name="nPerEstado" required>
            <option value="1" {{ old('nPerEstado') == '1' ? 'selected' : '' }}>Casado</option>
            <option value="0" {{ old('nPerEstado') == '0' ? 'selected' : '' }}>Soltero</option>
        </select>
        
        <button type="submit">Crear</button>
    </form>
</body>
</html>
