@props(['id', 'nombre', 'precio'])
<div class="col mb-5">
    <div class="card h-100">
        <!-- Product image-->
        @if ($imagen != "")
            <img class="card-img-top" src="imagen/{{$imagen}}" alt="Producto: {{$nombre}}" style="max-height: 200px;"/>
        @else
            <img class="card-img-top" src="imagen/default.png" alt="Producto: {{ $nombre }}" style="max-height: 200px;"/>
        @endif
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{ $nombre }}</h5>
                <!-- Product price-->
                {{ $precio }}
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('publicacion.show', $id ) }}">Mostrar mas</a></div>
        </div>
    </div>
</div>