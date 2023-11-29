@props(['id', 'nombre'])
<div class="col mb-5">
    <div class="card" style="width: 200px; border-radius: 0px;">
    @if ($imagen != "")
        <img class="card-img-top" src="{{ Storage::url($imagen)}}" alt="Producto: {{$nombre}}" style="max-height: 200px; border-radius: 0px;"/>
    @else
        <img class="card-img-top" src="storage/img/default.png" alt="Producto: {{ $nombre }}" style="max-height: 200px; border-radius: 0px;"/>
    @endif
        <div class="card-body">
            <h4 class="card-title">{{ $nombre }}</h4>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                    <a class="btn btn-outline-dark mt-auto" href="{{ route('temporada.show', $id ) }}">Mostrar mas</a>
                </div>
                <div class="text-center" style="margin-top: 5px;">
                    <a class="btn btn-outline-dark mt-auto" href="{{ route('temporada.edit', $id ) }}">Editar</a>
                </div>
                <div class="text-center" style="margin-top: 5px;">
                    <form method="post" action="{{ route('temporada.destroy', $id ) }}">
                        @csrf    
                        @method('DELETE')
                        <button class="btn btn-outline-dark mt-auto" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>