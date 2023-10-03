<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones</title>
</head>
<body>
    <h1 class="text-center">Lista de Cursos</h1>
    <table>
        <thead>
            <tr>
                <th> ID </th>
                <th> Nombre </th>
                <th> Descripción </th>
                <th> Precio </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publicaciones->all() as $publicacion)
                <tr>
                    <td>{{ $publicacion->id }}</td>
                    <td><a href="{{ route('publicacion.show', $publicacion->id ) }}">{{ $publicacion->nombre }}</a></td>
                    <td>{{ $publicacion->descripcion }}</td>
                    <td>{{ $publicacion->precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('publicacion.create') }}"> Crear Publicación </a>
</body>
</html>