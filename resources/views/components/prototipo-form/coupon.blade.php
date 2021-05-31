<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Coupon
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      Prototipo para verificar los coupons.
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt>
          <x-component.label for="keycoupon">
          key coupon 
          </x-component.label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <x-component.input id="keycoupon" wire:model="couponn.coupon"/>
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt>
          <x-component.label for="validity">
           validity
          </x-component.label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <x-component.input type="date" id="validity" wire:model="couponn.validity"/>
        </dd>
      </div>
    </dl>
  </div>
</div>