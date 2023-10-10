<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market-App</title>
    <link href="{{ asset('sidebar/css/navstyles.css')}}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-sidebar>
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Lista de Productos</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
        </header>
        @foreach ($publicaciones->all() as $publicacion)
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <x-product>
                        <x-slot:id>{{ $publicacion->id}}</x-slot:id>
                        <x-slot:nombre>{{ $publicacion->nombre }}</x-slot:nombre>
                        <x-slot:precio>${{ $publicacion->precio }}</x-slot:precio>
                    </x-product>
                </div>
            </div>
        </section>
        @endforeach
        </table>
    </x-sidebar>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('sidebar/css/navstyles.css')}}"></script>
</body>
</html>