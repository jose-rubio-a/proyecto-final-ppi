<x-base>
    <div class="row">
        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center">
            @if(auth()->user()->profile_photo_path)
                <img class="d-lg-flex justify-content-lg-center align-items-lg-center" style="width: 100%;height: 100%;">
            @else
            <img class="d-lg-flex justify-content-lg-center align-items-lg-center" style="width: 100%;height: 100%;" src="{{asset('storage/img/user.png')}}">
            @endif
        </div>
        <div class="col">
            <h1>Nombre:</h1>
            <h4>{{ auth()->user()->name }}</h4>
            <h1>Correo:</h1>
            <h4>{{ auth()->user()->email }}</h4>
            <div class="col d-flex justify-content-center align-items-center">
                <a class="btn btn-primary" href="{{ route('makeAdmin', auth()->user())}}" style="width: 50%;border-width: 0; margin-top: 20px;">Hacer Administrador</a>
            </div>
        </div>
    </div>
</x-base>
