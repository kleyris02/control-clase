<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" />

        <h1 class="text-xl font-semibold mb-4">{{ __('Entrar') }}</h1>

        <x-splade-form action="{{ route('login') }}" class="space-y-4">
            <!-- Email Address -->
            <x-splade-input id="email" type="email" name="email" :label="__('Correo electronico')" required autofocus />
            <x-splade-input id="password" type="password" name="password" :label="__('Contraseña')" required
                autocomplete="current-password" />
            <x-splade-checkbox id="remember_me" name="remember" :label="__('Recuerdame')" />

            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                <Link class="underline text-sm text-gray-600 hover:text-gray-900"
                    href="{{ route('password.request') }}">
                {{ __('Olvidaste tu contraseña?') }}
                </Link>
                @endif

                <x-splade-submit class="ml-3" :label="__('Entrar')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>