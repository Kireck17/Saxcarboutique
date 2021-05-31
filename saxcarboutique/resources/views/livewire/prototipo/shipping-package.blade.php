<div>
   <x-jet-banner/>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            Shipping Package
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Prototipo para verificar Shipping Package
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt>
                        <x-component.label for="orde">
                        Tracking Number
                        </x-component.label>
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-component.input type="text"  id="orde" wire:model="shipPa.tracking_number"/>
                        </dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt>
                        <x-component.label for="validity">
                        Shipping Date
                        </x-component.label>
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-component.input type="date" id="validity" wire:model="shipPa.shipping_date"/>
                        </dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt>
                        <x-component.label for="vali">
                        Delivery Date
                        </x-component.label>
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-component.input type="date" id="vali" wire:model="shipPa.delivery_date"/>
                        </dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt>
                        <x-component.label for="or">
                        Price
                        </x-component.label>
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-component.input type="text"  id="or" wire:model="shipPa.price"/>
                        </dd>
                    </div>

                
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt>
                        <x-component.label for="User">
                        User
                        </x-component.label>
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <select name="User" id="User" wire:model="shipPa.user_id">
                            <option value="">--Selecciona--</option>
                            @foreach($usersID as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        </dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt>
                        <x-component.label for="ord">
                        Phone
                        </x-component.label>
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <select name="User" id="ord" wire:model="shipPa.phone_id">
                            <option value="">--Selecciona--</option>
                            @foreach($phone as $or)
                                <option value="{{$or->id}}">{{$or->phone}}</option>
                            @endforeach
                        </select>
                        </dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt>
                        <x-component.label for="pro">
                        Address
                        </x-component.label>
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <select name="pro" id="User" wire:model="shipPa.address_id">
                            <option value="">--Selecciona--</option>
                            @foreach($addres as $pro)
                                <option value="{{$pro->id}}">{{$pro->colony}} {{$pro->state}} {{$pro->country}}</option>
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