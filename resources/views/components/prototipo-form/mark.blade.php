<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Mark
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      Prototipo para verificar las mark
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
        <div class="border-t border-gray-200">
            <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt>
                <x-component.label for="name">
                Name
                </x-component.label>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <x-component.input id="name" wire:model="mark.name"/>
                </dd>
            </div>
            </dl>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt>
            <x-component.label for="photo">
            photo
            </x-component.label>
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                @if(isset($this->mark['photo']))
                    <div class="flex flex-col justify-center items-center p-2">
                        <span class="font-bold">Vista previa</span>
                        <img src="{{$this->mark['photo']->temporaryUrl()}}" alt="vista previa" class="w-20 h-20">
                    </div>
                @endif
            </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <x-component.input type="file" id="photo" wire:model="mark.photo" accept="image/png, .jpeg, .jpg, image/gif"/>
            <x-jet-input-error for="mark.photo"/>
        </div>
    </dl>
  </div>
</div>