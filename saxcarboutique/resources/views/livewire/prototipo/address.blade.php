<div>
   <x-jet-banner/>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            Adress
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Prototipo para verificar los Adress
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="street">
                Street
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="text"  id="street" wire:model="adress.street"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="colony">
                colony
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="text"  id="colony" wire:model="adress.colony"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="state">
                state
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="text" id="state" wire:model="adress.state"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="country">
                country
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="text" id="country" wire:model="adress.country"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="status">
                status
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="text" id="status" wire:model="adress.status"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="internal_number">
                internal_number
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="number" min="0" id="internal_number" wire:model="adress.internal_number"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="external_number">
                external_number
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="number" min="0" id="external_number" wire:model="adress.external_number"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="zip_code">
                zip_code
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input type="number" min="0" id="zip_code" wire:model="adress.zip_code"/>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="User">
                User
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <select name="User" id="User" wire:model="adress.user_id">
                    <option value="-1">--Selecciona--</option>
                    @foreach($usersID as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
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

