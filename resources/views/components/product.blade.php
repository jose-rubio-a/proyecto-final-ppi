@props(['id', 'nombre', 'precio'])
<div class="col mb-5">
            <div class="card" style="width: 200px; border-radius: 0px;">
            @if ($imagen != "")
                <img class="card-img-top" src="{{ Storage::url($imagen)}}" alt="Producto: {{$nombre}}" style="max-height: 200px; border-radius: 0px;"/>
            @else
                <img class="card-img-top" src="storage/img/default.png" alt="Producto: {{ $nombre }}" style="max-height: 200px; border-radius: 0px;"/>
            @endif
                <div class="card-body">
                    <h4 class="card-title">{{ $nombre }}</h4>
                    <h6 class="text-muted card-subtitle mb-2">{{ $precio }}</h6>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="{{ route('publicacion.show', $id ) }}">Mostrar mas</a>
                        </div>
                    </div>
                </div>
            </div>
</div>