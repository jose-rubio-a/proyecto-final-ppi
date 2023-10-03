<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar: {{ $publicacion->nombre }}</title>
</head>
<body>
    <h1>Editar: {{ $publicacion->nombre }}</h1>
    <form method="post" action="{{ route('publicacion.update', $publicacion->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="nombre" placeholder="Nombre" value="{{ $publicacion->nombre }}"><br>
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <textarea name="descripcion" placeholder="Descripcion" rows="10" cols="30">{{ $publicacion->descripcion }}</textarea><br>
        @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="number" name="precio" step="any" value="{{ $publicacion->precio }}">
        @error('precio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">Editar</button>
    </form>
    <a href="{{ route('publicacion.index') }}">REGRESAR</a>
</body>
</html>