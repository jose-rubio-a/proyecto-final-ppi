<x-base>
        <form class="d-sm-flex d-lg-flex justify-content-sm-center justify-content-lg-center" style="width: 100%;">
            @csrf
            @method('GET')
            <div class="d-flex d-sm-flex d-lg-flex justify-content-between justify-content-sm-center justify-content-lg-start" style="margin-top: 20px;margin-left: 0px;width: 80%;">
                <div class="d-sm-flex justify-content-sm-center" style="width: 80%;">
                        <input class="form-control" type="text" name="buscador" placeholder="Buscar Producto..." style="width: 100%;border-radius: 50px;border-color: rgb(111,115,123);padding-right: 0px;">
                </div>
                <div class="d-sm-flex justify-content-sm-center" style="width: 20%;">
                    <button class="btn btn-primary border rounded-pill justify-content-center align-items-center align-content-center align-self-center" type="button" style="margin-left: 0px;width: 100%;border-radius: 40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search" style="font-size: 16px;width: 100%;">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    <div>
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