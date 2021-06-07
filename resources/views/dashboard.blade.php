<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-containers.main>
        @livewire('dasboard.slider')
        @livewire('dasboard.card')
    </x-containers.main>
</x-app-layout>
