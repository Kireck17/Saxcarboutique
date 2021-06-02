<div>
    <div class="grid grid-cols-12 gap-3">
        @foreach($this->photos as $key => $photo)
            <div class="p-3 col-span-2">
                <img src="{{asset($photo->route)}}" class="w-full h-auto" alt="">
            </div>
            <div class="px-6 col-span-5">
                <x-component.select wire:model="selected_products.{{$key}}.id">
                    <x-slot name="default">
                        Selecciona un producto...
                    </x-slot>
                    @foreach($this->products as $product)
                        <option value="{{$product->id}}">
                            {{$product->name}}
                        </option>
                    @endforeach
                </x-component.select>
            </div>
            <div class="px-6 col-span-5">
                <x-component.input type="text" wire:model="photos.{{$key}}.id"/>
            </div>
        @endforeach
    </div>
    <div>
        <x-component.btn-success wire:click="guardar">
            Agregar
        </x-component.btn-success>
    </div>
</div>
