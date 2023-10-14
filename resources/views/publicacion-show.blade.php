<x-base>
<div style="margin-left: 92px;">
        <div class="d-lg-flex justify-content-lg-center">
            @if ($publicacion->imagen != "")
            <img class="d-lg-flex justify-content-lg-center" style="height: 250px;" src="/imagen/{{ $publicacion->imagen }}" alt="{{ $publicacion->nombre }}">
            @else
            <img class="d-lg-flex justify-content-lg-center" style="height: 250px;" src="/imagen/default.png" alt="{{ $publicacion->nombre }}">
            @endif    
        </div>
        <div>
            <div class="row">
                <div class="col">
                    <h1 style="margin-left: 25px;">{{ $publicacion->nombre }}</h1>
                </div>
                <div class="col d-lg-flex align-items-lg-center">
                    <h4>Precio: ${{ $publicacion->precio }}</h4>
                </div>
            </div>
        </div>
        <div style="margin-left: 30px;">
            <p>{{ $publicacion->descripcion }}</p>
        </div>
        <div class="justify-content-end align-self-end me-auto">
            <div class="row">
                <div class="col">
                    <h6 style="margin-left: 25px;">Creado: {{ $publicacion->created_at }}</h6>
                </div>
                <div class="col">
                    <h6 style="margin-left: 25px;">Modifcacion: {{ $publicacion->updated_at }}</h6>
                </div>
            </div>
        </div>
        <div class="d-lg-flex justify-content-lg-center" style="margin-top: 30px;">
            <div class="btn-group" role="group">
                <a class="btn btn-primary" href="{{ route('publicacion.edit', $publicacion->id ) }}" style="width: 300px;font-size: 24px;">Editar</a>
                <form method="post" action="{{ route('publicacion.destroy', $publicacion->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary" type="submit" style="width: 300px;font-size: 24px;background: var(--bs-danger);border-color: var(--bs-danger); margin-left: -5px;">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</x-base>