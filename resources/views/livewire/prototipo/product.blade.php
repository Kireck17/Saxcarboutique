<div>
   <x-jet-banner/>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            Product
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Prototipo para verificar los Product
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="name">
                Name
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <x-component.input id="name" wire:model="product.name"/>
                    <x-jet-input-error for="product.name"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="quantity">
                quantity
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="number" min="0"  id="quantity" wire:model.number="product.quantity"/>
                <x-jet-input-error for="product.quantity"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="price">
                price
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="number" min="0" step="0.01" id="price" wire:model.number="product.price"/>
                <x-jet-input-error for="product.price"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="discount">
                discount
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="number" min="0" id="discount" wire:model.number="product.discount"/>
                <x-jet-input-error for="product.discount"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="barcode">
                barcode
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="number" min="0" id="barcode" wire:model.number="product.barcode"/>
                <x-jet-input-error for="product.barcode"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="description">
                Description
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="text" id="description" wire:model="product.description"/>
                <x-jet-input-error for="product.description"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="mark">
                Mark
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <select name="mark" id="mark" wire:model="product.mark_id">
                    <option value="-1">--Selecciona--</option>
                    @foreach($markID as $mark)
                        <option value="{{$mark->id}}">{{$mark->name}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="product.mark_id"/>
                </dd>
            </div>
            </dl>
        </div>
    </div>
    <x-component.btn-success wire:click="save()">
        Guardar
    </x-component.btn-success >
    {{print_r($product)}}
</div>
