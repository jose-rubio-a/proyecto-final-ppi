<x-base>
    <div class="d-lg-flex justify-content-lg-start" style="margin-top: 20px;margin-left: 82px;">
        <form class="d-lg-flex justify-content-lg-end" style="width: 90%;" action="{{ route('publicacion.index')}}" method="post">
            @csrf
            @method('GET')
            <input class="form-control" type="text" name="buscador" placeholder="Buscar Producto..." style="width: 80%;border-radius: 50px;border-color: rgb(111,115,123);">
            <button class="btn btn-primary border rounded-pill" type="submit" style="margin-left: 5px;width: 150px;border-radius: 40px;">Buscar</button>
        </form>
    </div>
    <div style="margin-left: 100px;margin-top: 0px;">
        <section class="py-5 justify-content-center">
            <h1 style="text-align: center;">LISTA DE PRODUCTOS</h1>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($publicaciones->all() as $publicacion)
                    <x-product>
                        <x-slot:imagen>{{ $publicacion->imagen }}</x-slot:imagen>
                        <x-slot:id>{{ $publicacion->id}}</x-slot:id>
                        <x-slot:nombre>{{ $publicacion->nombre }}</x-slot:nombre>
                        <x-slot:precio>${{ $publicacion->precio }}</x-slot:precio>
                    </x-product>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-base>