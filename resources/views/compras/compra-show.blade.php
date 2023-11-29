<x-base>
    <div class="row d-flex d-lg-flex flex-column justify-content-center align-items-center justify-content-lg-center align-items-lg-center">
    <div class="col d-flex justify-content-center align-items-center">
        <h1>Compra {{ $compra->id }}</h1>
    </div>
    <div class="col" style="margin-top: 20px;width: 50%;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                @foreach($compra->publicaciones as $publicacion)
                <tbody>
                    <tr>
                        <td>{{ $publicacion->nombre }}</td>
                        <td>$ {{ $publicacion->precio }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col d-flex justify-content-center align-items-center">
        <a class="btn btn-primary" href="{{ route('compra.index' )}}" style="width: 30%;border-width: 0;">Regresar</a>
    </div>
</x-base>