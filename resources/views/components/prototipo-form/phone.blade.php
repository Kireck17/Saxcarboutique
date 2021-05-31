<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Phone
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      Prototipo para verificar los Phone
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt>
          <x-component.label for="telephone">
          Telephone
          </x-component.label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <x-component.input type="number" max="10" min="0" id="telephone" wire:model.number="phoness.telephone"/>
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt>
          <x-component.label for="phone">
          phone
          </x-component.label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <x-component.input type="number" max="10" min="0" id="phone" wire:model.number="phoness.phone"/>
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt>
          <x-component.label for="status">
          status
          </x-component.label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <x-component.input type="text" max="10" min="0" id="status" wire:model="phoness.status"/>
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt>
          <x-component.label for="User">
          User
          </x-component.label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <select name="User" id="User" wire:model="phoness.user_id">
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