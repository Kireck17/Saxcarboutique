<x-app-layout>
	<x-slot name="header">
                <div class="text-gray-500  h-3 ml-2">
                    <button class="mx-3 hover:text-yellow-500 ">
                        <span>Accesorios Para Vehiculos</span>
                    </button>


                    <button class="mx-3 hover:text-yellow-500 ">
                        <span>Celulares y Telefonia</span>
                    </button>

                    <button class="mx-3 hover:text-yellow-500 ">
                        <span>Impresoras y Etiquetas</span>
                    </button>

                    <button class="mx-3 hover:text-yellow-500 ">
                        <span>Accesorios de Computo</span>
                    </button>

                    <button class="mx-3 hover:text-yellow-500 ">
                        <span>Calzado</span>
                    </button>

                    <button class="mx-3 hover:text-yellow-500 ">
                        <span>Pantalones</span>
                    </button>

                    <button class="mx-3 hover:text-yellow-500 ">
                        <span>Accesorios</span>
                    </button>

                </div> 
	</x-slot>
	<div class="m-3 p-3 bg-white shadow sm:rounded-lg overflow-hidden">
	@livewire('prototipo.intro')
		
	</div>
</x-app-layout>	