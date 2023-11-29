<x-base>
    <div class="col-md-12 d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="width: 100%;padding-right: 0px;padding-left: 0px;">
        <div class="col-md-12 d-flex d-lg-flex justify-content-center justify-content-lg-center align-items-lg-center" style="width: 100%;padding-right: 0px;padding-left: 0px;">
            <img class="d-inline-block" src="{{asset('storage/img/playera_portada.jpg')}}" style="width: 100%;">
            <h1 style="position: absolute;color: rgba(14,45,86,0.85);font-family: 'Abril Fatface', serif;font-size: 50px; text-align: center;">SIMPL WEAR</h1>
        </div>
    </div>
    <section class="py-5 justify-content-center">
            <h1 style="text-align: center;">LISTA DE TEMPORADAS</h1>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($temporadas->all() as $temporada)
                    <x-temporada-card>
                        <x-slot:imagen>{{ $temporada->archivo_ubicacion }}</x-slot:imagen>
                        <x-slot:nombre>{{ $temporada->nombre }}</x-slot:nombre>
                        <x-slot:id>{{ $temporada->id }}</x-slot:id>
                    </x-temporada-card>
                    @endforeach
                </div>
            </div>
        </section>
</x-base>