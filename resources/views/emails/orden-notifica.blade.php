<x-mail::message>
    # Se realizo una compra en SIMPL Wear

    ID compra: {{ $compra->id }}
    Total: {{ $compra->total }}

    <x-mail::table>
        | Producto       | Precio  |
        | -------------- | -------:|
        @foreach($compra->publicaciones as $publicacion)
        | {{ $publicacion->nombre }}     | {{$publicacion->precio}}      |
        @endforeach
    </x-mail::table>

    <x-mail::button :url="$url">
        Ver Orden
    </x-mail::button>

</x-mail::message>