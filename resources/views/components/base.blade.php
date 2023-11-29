<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>SIMPL WEAR</title>
        <link rel="shortcut icon" href="{{asset('/storage/img/Diseno_sin_titulo.png')}}" />
        <link rel="stylesheet" href="{{asset('simpl/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('simpl/css/estrellas.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
        <link rel="stylesheet" href="{{asset('simpl/css/animate.min.css')}}">
    </head>

    <body>
    <header class="d-flex d-lg-flex justify-content-center justify-content-lg-center" style="width: 100%;">
        <div class="row d-md-flex justify-content-md-start" style="width: 100%;">
            <div class="col-md-1 d-flex d-sm-flex d-md-flex justify-content-center align-items-center align-items-sm-center justify-content-md-center align-items-md-center" style="width: 20%;"><button class="btn btn-primary d-flex justify-content-center align-items-center" data-bss-hover-animate="pulse" type="button" data-bs-target="#offcanvas-menu" data-bs-toggle="offcanvas" style="width: 50px;height: 50%;min-width: 30px;max-width: 50px;min-height: 30px;max-height: 50px;background: var(--bs-gray-400);border-width: 0px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list" style="width: 100%;height: 100%;filter: invert(100%);transform: scale(1.37);">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                    </svg>
                </button>
            </div>
            <div class="col d-flex d-md-flex justify-content-center align-items-center justify-content-md-center" style="width: 80%;">
                <a href="/">
                    <img src="{{asset('/storage/img/Diseno_sin_titulo.png')}}" style="width: 150px;">
                </a>
            </div>
            @if (Route::has('login'))
                @auth
                <div class="col-md-1 d-flex d-sm-flex d-md-flex justify-content-center align-items-center align-items-sm-center justify-content-md-center align-items-md-center" style="width: 20%;">
                <a class="btn btn-primary d-flex justify-content-center align-items-center" data-bss-hover-animate="pulse" href="{{ route('compra.create') }}" style="width: 50px;height: 50px;min-width: 30px;max-width: 50px;min-height: 30px;max-height: 50px;background: var(--bs-body-bg);border-width: 0px;margin-right: 10%;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cart" style="backdrop-filter: invert(100%);filter: invert(100%);width: 100%;height: 100%;transform: scale(1.37);">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                    </svg></a>
                </div>
                @endif
            @endif
        </div>
    </header>
    <div class="offcanvas offcanvas-start bg-body" tabindex="-1" data-bs-backdrop="false" id="offcanvas-menu">
        <div class="offcanvas-header">
            <a class="link-body-emphasis d-flex align-items-center me-md-auto mb-3 mb-md-0 text-decoration-none" href="/">
                <img src="{{asset('/storage/img/Diseno_sin_titulo.png')}}" style="width: 150px;">
                <span class="fs-4">Simpl Wear</span>
            </a>
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button>
            </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between pt-0">
            <div>
                <hr class="mt-0">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item"><a class="nav-link active link-light" href="{{ route('publicacion.index') }}" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-house-door me-2">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"></path>
                            </svg> Inicio </a></li>
                    <li class="nav-item">
                            <a class="nav-link link-body-emphasis" href="{{ route('temporada.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-suit-heart-fill me-2">
                                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                            </svg> Temporadas </a></li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="{{ route('compra.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag-fill me-2">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"></path>
                            </svg> Compras </a></li>
                    @auth
                        @if(auth()->user()->admin)
                                <li class="nav-item"><a class="nav-link link-body-emphasis" href="{{ route('publicacion.create') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle-fill me-2">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                            </svg> Agregar producto </a>
                        </li>
                        <li class="nav-item"><a class="nav-link link-body-emphasis" href="{{ route('temporada.create') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle-fill me-2">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                            </svg> Agregar temporada </a>
                        </li>
                        @endif
                    @endif
                </ul>
            </div>
            <div>
                <hr>
                <div class="dropdown">
                    <a class="dropdown-toggle link-body-emphasis d-flex align-items-center text-decoration-none" aria-expanded="false" data-bs-toggle="dropdown" role="button"><img class="rounded-circle me-2" alt="" width="32" height="32" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" style="object-fit: cover;">
                        @if (Route::has('login'))
                            @auth
                                <strong>{{Auth::user()->name}}</strong>
                            @else
                                <strong>Usuario</strong>
                            @endif
                        @endif
                    </a>
                    @if (Route::has('login'))
                    <div class="dropdown-menu shadow text-small" data-popper-placement="top-start">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="dropdown-item">Dashboard</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post" x-data="">
                            @csrf
                            <button class="dropdown-item" type="submit">Log out</button> <!-- En caso de dejar tipo a podemos agregar @click.prevent para evitar que funcione como get-->
                        </form>
                        @else
                        <a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesion</a>
                        <a class="dropdown-item" href="{{ route('register') }}">Registrarse</a>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{$slot}}
    <script src="{{ asset('simpl/js/bootstrap.min.js')}}"></script>
    @livewireScripts
    </body>

</html>