<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Payment Method
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      Protoripo para verificar los Payment Method.
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt>
          <x-component.label for="method">
          method
          </x-component.label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <x-component.input id="method" wire:model="pay.method"/>
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt>
          <x-component.label for="cuantity">
          cuantity
          </x-component.label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <x-component.input type="number" id="cuantity" wire:model.number="pay.cuantity" min="0"/>
        </dd>
      </div>
    </dl>
  </div>
</div>