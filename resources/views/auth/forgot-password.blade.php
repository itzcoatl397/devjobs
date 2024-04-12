<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidastes  tu contraseña? coloca  tu email de  registro y te enviaremos  un  enlace  para recuperar tu acceso.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">

            <x-link
            :href="route('login')"
            >
            Iniciar Sesión


            </x-link>

            <x-link
            :href="route('register')"


            >
           Crear Cuenta

            </x-link>
        </div>
        <x-primary-button class="w-full justify-center mt-5">
            {{ __('Restablece tu contraseña') }}
        </x-primary-button>
    </form>
</x-guest-layout>
