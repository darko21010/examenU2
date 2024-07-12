<!DOCTYPE html>
<html>
<head>
    <title>Listado de Alumnos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Listado de Alumnos</h1>
    @include('menu')

    @if (session('success'))
        <div>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Nota1</th>
                <th>Nota2</th>
                <th>Promedio</th>
                <th>Condicion</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumnos)
                <tr>
                    <td>{{ $alumnos->nCodigo }}</td>
                    <td>{{ $alumnos->Apellido }}</td>
                    <td>{{ $alumnos->Nombre }}</td>
                    <td>{{ $alumnos->Curso }}</td>
                    <td>{{ $alumnos->Nota1 }}</td>
                    <td>{{ $alumnos->Nota2 }}</td>
                    <td>{{ $alumnos->Promedio }}</td>
                    <td>{{ $alumnos->Condicion }}</td>
                    <td>{{ $alumnos->created_at }}</td>
                    <td>{{ $alumnos->updated_at }}</td>
                    <td>
                        <a href="{{ route('alumnos.edit', $alumnos->nCodigo) }}">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumnos->nCodigo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Está seguro de eliminar este alumno?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
