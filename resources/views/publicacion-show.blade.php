<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $publicacion->nombre }}</title>
    <link href="{{ asset('sidebar/css/navstyles.css')}}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-sidebar>
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
    </x-sidebar>
</body>
</html>