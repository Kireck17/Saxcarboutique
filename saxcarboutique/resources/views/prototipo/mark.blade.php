<x-app-layout>
	<x-prototipo-form.show-nav/>
	<x-slot name="header">
		Marcas
	</x-slot>
	<div class="m-3 p-3 bg-white shadow sm:rounded-lg overflow-hidden">

		@livewire('prototipo.mark')
	</div>
</x-app-layout>