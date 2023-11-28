<x-base>

    <div class="row" style="height: 500px;width: 100%;margin-right: 0px;margin-left: 0px;">
        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center">
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-right: 10px;margin-bottom: 10px;margin-left: 10px;margin-top: 10px;">
                        <div class="col">
                            <img src="{{asset('/storage/img/Diseno_sin_titulo.png')}}">
                        </div>
                        <div class="col">
                            <h1>Regístrate</h1>
                            <x-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <label class="form-label" for="name" value="{{ __('Name') }}">Nombre</label>
                                <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <label class="form-label" for="email" value="{{ __('Email') }}">Correo Electrónico</label>
                                <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <label class="form-label" for="password" value="{{ __('Password') }}">Contraseña</label>
                                <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password">
                                <label class="form-label" for="password_confirmation" value="{{ __('Confirm Password') }}">Confirmar Contraseña</label>
                                <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                                <button class="btn btn-primary" type="submit" style="width: 100%;margin-top: 10px;margin-bottom: 5px;">Regístrate</button>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-label for="terms">
                                            <div class="flex items-center">
                                                <x-checkbox name="terms" id="terms" required />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-label>
                                    </div>
                                @endif
                            </form>
                            <a href="{{ route('login') }}" style="margin-top: 30px;">¿Ya tienes cuenta? Inicia Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-base>