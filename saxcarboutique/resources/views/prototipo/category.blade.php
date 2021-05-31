<x-app-layout>
    <x-prototipo-form.show-nav/>
	<x-slot name="header">
		Categoria
	</x-slot>
	<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('prototipo.category')
            </div>
        </div>
    </div>
</x-app-layout>