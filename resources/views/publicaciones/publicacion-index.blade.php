<x-base>
    <div class="col-md-12 d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="width: 100%;padding-right: 0px;padding-left: 0px;">
        <div class="col-md-12 d-flex d-lg-flex justify-content-center justify-content-lg-center align-items-lg-center" style="width: 100%;padding-right: 0px;padding-left: 0px;">
            <img class="d-inline-block" src="{{asset('storage/img/playera_portada.jpg')}}" style="width: 100%;">
            <h1 style="position: absolute;color: rgba(14,45,86,0.85);font-family: 'Abril Fatface', serif;font-size: 50px; text-align: center;">SIMPL WEAR</h1>
        </div>
    </div>
    <div class="col d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center" style="margin-top: 20px;margin-bottom: 20px;">
            <form class="d-lg-flex align-items-lg-center" style="width: 90%;">
            @csrf
            @method('GET')
                <input class="form-control d-inline-flex" type="text" name="buscador" placeholder="Buscar Producto..." style="width: 80%;margin-right: 10px;border-radius: 20px;">
                <button class="btn btn-primary d-inline-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" type="input" style="width: 15%;height: 40px;border-radius: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search" style="width: 70%;height: 70%;">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                </button>
            </form>
        </div>
    <div>
        <section class="py-5 justify-content-center">
            <h1 style="text-align: center;">LISTA DE PRODUCTOS</h1>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($publicaciones->all() as $publicacion)
                    <x-product>
                        <x-slot:imagen>{{ $publicacion->archivo_ubicacion }}</x-slot:imagen>
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