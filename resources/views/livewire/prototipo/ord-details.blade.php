<div>
   <x-jet-banner/>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            Order Details
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Prototipo para verificar Orders Details
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt>
                    <x-component.label for="validity">
                    Feach Day
                    </x-component.label>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <x-component.input type="date" id="validity" wire:model="ordDet.feach_day"/>
                    </dd>
                </div>

                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt>
                    <x-component.label for="orde">
                    Sub Total
                    </x-component.label>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <x-component.input type="text"  id="orde" wire:model="ordDet.sub_total"/>
                    </dd>
                </div>

                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt>
                    <x-component.label for="orde">
                    Discount
                    </x-component.label>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <x-component.input type="text"  id="orde" wire:model="ordDet.discount"/>
                    </dd>
                </div>
                
                
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt>
                    <x-component.label for="ord">
                    Order
                    </x-component.label>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <select name="User" id="ord" wire:model="ordDet.order_id">
                        <option value="">--Selecciona--</option>
                        @foreach($order as $or)
                            <option value="{{$or->id}}">{{$or->total}}</option>
                        @endforeach
                    </select>
                    </dd>
                </div>

                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt>
                    <x-component.label for="pro">
                    Product
                    </x-component.label>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <select name="pro" id="User" wire:model="ordDet.product_id">
                        <option value="">--Selecciona--</option>
                        @foreach($product as $pro)
                            <option value="{{$pro->id}}">{{$pro->name}}</option>
                        @endforeach
                    </select>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
    <x-component.btn-success wire:click="save()">
        Guardar
    </x-component.btn-success >
</div>
