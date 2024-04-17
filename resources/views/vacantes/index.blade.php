<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mis Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


     @if (session()->has('mensaje'))

        <div class="w-full uppercase bg-green-500 rounded-md p-5 text-center text-white font-bold mb-5">
            {{ session('mensaje') }}
        </div>

     @endif
       <livewire:mostrar-vacantes>
    </div>
</x-app-layout>
