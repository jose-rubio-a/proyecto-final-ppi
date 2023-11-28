<x-base>

    <div class="row" style="height: 500px;width: 100%;margin-right: 0px;margin-left: 0px;">
        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center">

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-right: 10px;margin-bottom: 10px;margin-left: 10px;margin-top: 10px;">
                        <div class="col">
                            <img src="{{asset('/storage/img/Diseno_sin_titulo.png')}}">
                        </div>
                        <div class="col">
                            <h1>Iniciar Sesión</h1>
                            <x-validation-errors class="mb-4" />
                            <form  method="POST" action="{{ route('login') }}">
                                @csrf
                                <label for="email" value="{{ __('Email') }}">Correo Electrónico</label>
                                <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <label for="password" value="{{ __('Password') }}">Contraseña</label>
                                <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password">
                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <x-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <button class="btn btn-primary" type="submit" style="width: 100%;margin-top: 10px;margin-bottom: 5px;">Iniciar Sesión</button>
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste la contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                            <a href="{{ route('register') }}" style="margin-top: 30px;">¿No tienes cuenta? Regístrate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-base>