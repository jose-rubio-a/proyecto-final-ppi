<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $publicacion->nombre }}</title>
</head>
<body>
    <h1>{{ $publicacion->nombre }}</h1>
    <h3>{{ $publicacion->precio }}</h3>
    <p>{{ $publicacion->descripcion }}</p>
    <div>
        <a href="{{ route('publicacion.edit', $publicacion->id) }}">Editar publicación </a>
        <form action="{{ route('publicacion.destroy', $publicacion->id )}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
    </div>
    <a href="{{ route('publicacion.index') }}">REGRESAR</a>
</body>
</html>