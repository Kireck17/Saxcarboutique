<div class="p-24 flex flex-wrap items-center justify-center">
    <!--Card Correcta-->
    @foreach($products as $product)
        <a href="">
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-500 rounded-lg max-w-xs shadow-lg">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-44 h-44 bottom-0 left-0 -mb-20 ml-2" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">{{__($product->mark()->first()->name)}}</span>
                    <div class="flex justify-between space-x-4">
                        <div class="block font-semibold text-xl">{{__($product->name)}}</div>
                        <div class=" bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">${{__($product->price)}}</div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    <!--Card prueba-->
    <section id="carManual" class="p-24 flex flex-wrap items-center justify-center">
        <!--Card-->
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-44 h-44 bottom-0 left-0 -mb-20 ml-2" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Monstera</span>
                    <span class=" bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                </div>
            </div>
        </div>
        <!--Card-->
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-44 h-44 bottom-0 left-0 -mb-20 ml-2" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Monstera</span>
                    <span class=" bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                </div>
            </div>
        </div>
        <!--Card-->
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-44 h-44 bottom-0 left-0 -mb-20 ml-2" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Monstera</span>
                    <span class=" bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                </div>
            </div>
        </div>
        <!--Card-->
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-44 h-44 bottom-0 left-0 -mb-20 ml-2" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Monstera</span>
                    <span class=" bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                </div>
            </div>
        </div>
        <!--Card-->
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-44 h-44 bottom-0 left-0 -mb-20 ml-2" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Monstera</span>
                    <span class=" bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                </div>
            </div>
        </div>
        <!--Card-->
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-44 h-44 bottom-0 left-0 -mb-20 ml-2" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Monstera</span>
                    <span class=" bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                </div>
            </div>
        </div>
    </section>
    <!--Card search-->
    <div>
        <input wire:model="search" type="search" placeholder="Search posts by title...">

        <h1>Search Results:</h1>

        <ul>
            <div class="p-24 flex flex-wrap items-center justify-center" id="search_card">
                @foreach($posts as $post)
                    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-500 rounded-lg max-w-xs shadow-lg">
                            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                            </svg>
                            <div class="relative pt-10 px-10 flex items-center justify-center">
                                <div class="block absolute w-44 h-44 bottom-0 left-0 -mb-20 ml-2" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
                            </div>
                            <div class="relative text-white px-6 pb-6 mt-6">
                                <span class="block opacity-75 -mb-1">{{__($post->mark()->first()->name)}}</span>
                                <div class="flex justify-between space-x-4">
                                    <span class="block font-semibold text-xl">{{__($post->name)}}</span>
                                    <span class=" bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">${{__($post->price)}}</span>
                                </div>
                            </div>
                    </div>
                @endforeach
            </div>
        </ul>
    </div>
</div>
