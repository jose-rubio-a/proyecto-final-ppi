<x-base>

<div>
    <div class="row" style="margin-top: 30px; width: 100%;">
        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center">
            @if ($publicacion->archivo_ubicacion != NULL)
                <img style="width: 100%;" src="{{ Storage::url($publicacion->archivo_ubicacion) }}" alt="{{ $publicacion->nombre }}">
            @else
                <img style="width: 100%;" src="/storage/img/default.png" alt="{{ $publicacion->nombre }}">
            @endif  
        </div>
        <div class="col">
            <h1>{{ $publicacion->nombre }}</h1>
            <h4>$ {{ $publicacion->precio }}</h4>
            <p>{{ $publicacion->descripcion }}</p>
            <div class="row" style="width: 80%;">
                <div class="col">
                    <h6 style="margin-left: 25px;">Creado: {{ $publicacion->created_at }} por {{ $publicacion->user->name }}</h6>
                </div>
                <div class="col">
                    <h6 style="margin-left: 25px;">Modifcacion: {{ $publicacion->updated_at }} por {{ $publicacion->user->name }}</h6>
                </div>
            </div>
            <button class="btn btn-primary" type="button" style="width: 100%;background: var(--bs-emphasis-color);border-width: 0; margin-top: 20px;">Agregar al carrito</button>
            @if (strval(Auth::id()) == $publicacion->user_id)
            <div class="row" style="margin-top: 30px; width: 100%;" class="d-flex d-lg-flex justify-content-center justify-content-lg-center align-items-lg-center">
                <div class="col">
                    <a class="btn btn-primary" href="{{ route('publicacion.edit', $publicacion->id ) }}" style="width: 100%;background: var(--bs-btn-border-color);border-width: 0;">Editar</a>
                </div>
                <div class="col">
                    <form method="post" action="{{ route('publicacion.destroy', $publicacion->id ) }}">
                        @csrf    
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit" style="width: 100%;background: var(--bs-form-invalid-color);border-width: 0;">Eliminar</button>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>
    @if (Route::has('login'))
        @auth
        <div class="d-flex d-lg-flex justify-content-center justify-content-lg-center align-items-lg-center" style="margin-top: 50px;">
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
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="calificacion" value="5"><label for="radio1" style="font-size: 30px;">★</label>
                            <input id="radio2" type="radio" name="calificacion" value="4"><label for="radio2" style="font-size: 30px;">★</label>
                            <input id="radio3" type="radio" name="calificacion" value="3"><label for="radio3" style="font-size: 30px;">★</label>
                            <input id="radio4" type="radio" name="calificacion" value="2"><label for="radio4" style="font-size: 30px;">★</label>
                            <input id="radio5" type="radio" name="calificacion" value="1"><label for="radio5" style="font-size: 30px;">★</label>
                        </p>
                        @error('calificacion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button class="btn btn-primary" type="submit" style="width: 100%;">Comentar</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    @endif
    <div class="row flex-column" style="margin-top: 30px; width: 100%;">
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