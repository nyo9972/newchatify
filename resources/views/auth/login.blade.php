<div style="display:none;">
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <img src="" style="width: 100px;" class="block w-auto" />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            @php
                $emailDecode = base64_decode(request()->get('email'));
                $passwordDecode = base64_decode(request()->get('password'));
            @endphp

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{ $emailDecode }}" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Senha') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="text" name="password" value="{{ $passwordDecode }}" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembre de mim') }}</span>
                    </label>
                </div>

                <div class="pull-right flex items-center mt-4">
                        <a class="pull-left underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                            {{ __('Registrar') }}
                        </a>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class=" underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif

                    <x-jet-button id="enter" class="ml-4">
                        {{ __('Entrar') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>

<div align="center" id="loading" style="display: block">
    <img src="https://cdn.dribbble.com/users/1186261/screenshots/3718681/_______.gif" style="width:150px;height:150px;" />
</div>

<script>
    setTimeout(function(){ 
        document.getElementById("enter").click();
     }, 0);
    
</script>