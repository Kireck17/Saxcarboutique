<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Photo
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      Prototipo para verificar las photos
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt>
          <x-component.label for="route">
          foto
          </x-component.label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            @if(isset($this->photo['route']))
                <div class="flex flex-col justify-center items-center p-2">
                    <span class="font-bold">Vista previa</span>
                    <img src="{{$this->photo['route']->temporaryUrl()}}" alt="vista previa" class="w-20 h-20">
                </div>
            @endif
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <x-component.input type="file" id="route" wire:model="photo.route" accept="image/png, .jpeg, .jpg, image/gif"/>
        <x-jet-input-error for="photo.route"/>
      </div>
    </dl>
  </div>
</div>