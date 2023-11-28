<x-base>
<div>
    <div class="row" style="margin-top: 30px;">
        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center">
            @if ($publicacion->archivo_ubicacion != NULL)
                <img style="width: 100%;" src="{{ Storage::url($publicacion->archivo_ubicacion) }}" alt="{{ $publicacion->nombre }}">
            @else
                <img style="width: 100%;" src="/storage/img/default.png" alt="{{ $publicacion->nombre }}">
            @endif  
        </div>
        <div class="col">
            <h1>{{ $publicacion->nombre }}</h1>
            <h4>{{ $publicacion->precio }}</h4>
            <p>{{ $publicacion->descripcion }}</p>
            <div class="row" style="width: 80%;">
                <div class="col">
                    <h6 style="margin-left: 25px;">Creado: {{ $publicacion->created_at }} por {{ $publicacion->user->name }}</h6>
                </div>
                <div class="col">
                    <h6 style="margin-left: 25px;">Modifcacion: {{ $publicacion->updated_at }} por {{ $publicacion->user->name }}</h6>
                </div>
            </div>
            <button class="btn btn-primary" type="button" style="width: 50%;background: var(--bs-emphasis-color);border-width: 0;">Agregar al carrito</button>
        </div>
    </div>
    <div class="d-lg-flex justify-content-lg-center align-items-lg-center" style="margin-top: 20px;">
        <div class="card" style="width: 80%;">
            <div class="card-body">
                <h2 class="card-title" style="text-align: center;">Has un comentario:</h2>
                <form style="margin-top: 20px;"  method="post" action="{{ route('comentario.store') }}">
                    @csrf
                    <input type="hidden" name="publicacion_id" value="{{ $publicacion->id }}" />
                    <textarea class="form-control" name="texto" placeholder="Deja tu comentario"></textarea>
                    @error('texto')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <h4>Calificación</h4>
                    <input class="form-range" type="range" min="1" max="5" step="1" name="calificacion" />
                    @error('calificacion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn btn-primary" type="submit" style="width: 100%;">Comentar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row flex-column" style="margin-top: 30px;">
        <div class="col">
            <h1 style="text-align: center;">Comentarios</h1>
        </div>
        @foreach ($comentarios->all() as $comentario)
            <x-comentario>
                <x-slot:nombre>{{ $comentario->user->name }}</x-slot:nombre>
                <x-slot:user_id>{{ $comentario->user->id }}</x-slot:user_id>
                <x-slot:id>{{ $comentario->id}}</x-slot:id>
                <x-slot:texto>{{ $comentario->texto }}</x-slot:texto>
                <x-slot:created_at>{{ $comentario->created_at }}</x-slot:created_at>
                <x-slot:calificacion>{{ $comentario->calificacion }}</x-slot:calificacion>
            </x-comentario>
        @endforeach
    </div>
</x-base>