<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación Publicación</title>
    <link href="{{ asset('sidebar/css/navstyles.css')}}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-sidebar>
        <h1>Crear una publicacion</h1>
        <form method="post" action="{{ route('publicacion.store') }}">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre"><br>
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <textarea name="descripcion" placeholder="Descripcion" rows="10" cols="30"></textarea><br>
            @error('descripcion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="number" name="precio" step="any">
            @error('precio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit">Crear</button>
        </form>
        <a href="{{ route('publicacion.index') }}">REGRESAR</a>
    </x-sidebar>
</body>
</html>