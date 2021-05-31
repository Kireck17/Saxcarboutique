<div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.category') }}" :active="request()->routeIs('prototipo.category')">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Category') }}
                        </h2>
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.photo') }}" :active="request()->routeIs('prototipo.photo')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Photo') }}
                        </h2>
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.cupon') }}" :active="request()->routeIs('prototipo.cupon')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Coupon') }}
                        </h2>
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.mark') }}" :active="request()->routeIs('prototipo.mark')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Mark') }}
                        </h2>
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.paymentMethod') }}" :active="request()->routeIs('prototipo.paymentMethod')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Payment Method') }}
                        </h2>
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.parcel') }}" :active="request()->routeIs('prototipo.parcel')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Parcel') }}
                        </h2>
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.phone') }}" :active="request()->routeIs('prototipo.phone')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Phone') }}
                        </h2>
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.address') }}" :active="request()->routeIs('prototipo.address')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Address') }}
                        </h2>
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.product') }}" :active="request()->routeIs('prototipo.product')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Product') }}
                        </h2>
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.order') }}" :active="request()->routeIs('prototipo.order')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Order') }}
                        </h2>
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.orderDetails') }}" :active="request()->routeIs('prototipo.orderDetails')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Order Details') }}
                        </h2>
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('prototipo.shippingPackage') }}" :active="request()->routeIs('prototipo.shippingPackage')">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Shipping Package') }}
                        </h2>
                    </x-jet-nav-link>
                </div>
</div>