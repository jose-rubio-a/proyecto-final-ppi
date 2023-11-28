@props(['id', 'texto', 'calificacion', 'created_at', 'nombre', 'user_id'])
<div class="col d-lg-flex justify-content-lg-center align-items-lg-center">
    <div class="card" style="width: 80%; margin-bottom: 10px;">
        <div class="card-body">
            <h4 class="card-title">{{ $nombre }}</h4>
            <h6 class="text-muted card-subtitle mb-2">Calificacion:{{ $calificacion }}</h6>
            <h6 class="text-muted card-subtitle mb-2">{{ $created_at}}</h6>
            <p class="card-text">{{ $texto }}</p>
            @if (strval(Auth::id()) == $user_id)
            <form method="post" action="{{ route('comentario.destroy', $id) }}">
                @csrf    
                @method('DELETE')
                <button class="btn btn-primary" type="submit" style="width: 50%;background: var(--bs-emphasis-color);border-width: 0;">Eliminar</button>
            </form>
            @endif
        </div>
    </div>
</div>