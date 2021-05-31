<div>
   <x-jet-banner/>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            Order
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Prototipo para verificar Orders
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="orde">
                Total
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="text"  id="orde" wire:model="order.total"/>
                </dd>
            </div>
            
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="User">
                User
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <select name="User" id="User" wire:model="order.user_id">
                    <option value="">--Selecciona--</option>
                    @foreach($usersID as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="User">
                Payment Method
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <select name="User" id="User" wire:model="order.payment_method_id">
                    <option value="">--Selecciona--</option>
                    @foreach($pay as $pa)
                        <option value="{{$pa->id}}">{{$pa->method}}</option>
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
