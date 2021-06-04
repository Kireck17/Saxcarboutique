
<div>
<div>
    
    <div class="relative text-blue-500 px-6 pb-6 mt-6">
    
        <span class="text-black font-bold text-center text-4xl">Carrusel de fotos de todos los productos </span>
        
    </div>
</div>
<div x-data="{swiper: null}"
  x-init="swiper = new Swiper($refs.container, {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
  
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
      },
    })"
  class="relative w-10/12 mx-auto flex flex-row"
>
  <div class="absolute inset-y-0 left-0 z-10 flex items-center">
    <button @click="swiper.slidePrev()" 
            class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
      <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
    </button>
  </div>

  
              
      <div class="swiper-slide p-4">
        <div class="flex flex-col rounded shadow overflow-hidden">
          <div class="flex-shrink-0">
            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1598951092651-653c21f5d0b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="">
          </div>
        </div>
      </div>
      
      <div class="swiper-slide p-4">
        <div class="flex flex-col rounded shadow overflow-hidden">
          <div class="flex-shrink-0">
            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1598946423291-ce029c687a42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="absolute inset-y-0 right-0 z-10 flex items-center">
    <button @click="swiper.slideNext()" 
            class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
      <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
</div>


<br>



<div>
    <div class="relative text-blue-500 px-6 pb-6 mt-6">
        <span class="text-black font-bold text-center text-4xl">Ofertas  </span>
        <span class="text-blue-500 font-bold text-center text-base hover:text-yellow-500">Ver mas</span>
    </div>
    <div class="px-3 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
        <a href="" class="h-96 w-full">
            <div class="relative flex flex-col rounded-md shadow-inner w-full h-full bg-blue-900 px-3 py-6 hover:bg-turquoise-light transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
                <svg class="absolute bottom-0 left-0 mb-8 " viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="flex justify-center items-center h-2/4">
                
                    <div class="h-full w-full bg-white rounded-md">
                        imagen
                    </div>
                </div>
                <div class="flex flex-col space-y-3 h-1/4">
                    <span class="text-yellow-dark font-bold text-center text-xl">
                       Sax Shields
                    </span>
                    <span class="text-white font-extralight text-lg text-left">
                        Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                    </span>
                </div>
                <div class="flex flex-col-reverse items-center h-1/4">
                    <span class="bg-cian-light text-lg text-white font-extralight text-center rounded-full px-6 py-3 leading-3 w-1/2">
                       $98.00
                    </span>
                </div>
            </div>
        </a>
        <a href="" class="h-96 w-full">
            <div class="relative flex flex-col rounded-md shadow-inner w-full h-full bg-blue-900 px-3 py-6 hover:bg-turquoise-light transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
                <svg class="absolute bottom-0 left-0 mb-8 " viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="flex justify-center items-center h-2/4">
                
                    <div class="h-full w-full bg-white rounded-md">
                        imagen
                    </div>
                </div>
                <div class="flex flex-col space-y-3 h-1/4">
                    <span class="text-yellow-dark font-bold text-center text-xl">
                       Bogi
                    </span>
                    <span class="text-white font-extralight text-lg text-left">
                        Pantalon De Mezclilla Premium Uso Rudo Talla L XL 38 40 42
                    </span>
                </div>
                <div class="flex flex-col-reverse items-center h-1/4">
                    <span class="bg-cian-light text-lg text-white font-extralight text-center rounded-full px-6 py-3 leading-3 w-1/2">
                       $249.00
                    </span>
                </div>
            </div>
        </a>
        <a href="" class="h-96 w-full">
            <div class="relative flex flex-col rounded-md shadow-inner w-full h-full bg-blue-900 px-3 py-6 hover:bg-turquoise-light transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
                <svg class="absolute bottom-0 left-0 mb-8 " viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="flex justify-center items-center h-2/4">
                
                    <div class="h-full w-full bg-white rounded-md">
                        imagen
                    </div>
                </div>
                <div class="flex flex-col space-y-3 h-1/4">
                    <span class="text-yellow-dark font-bold text-center text-xl">
                       SAX Comercializadora
                    </span>
                    <span class="text-white font-extralight text-lg text-left">
                        Sneakers Rain Convers Cubre Tenis Lluvia Protect
                    </span>
                </div>
                <div class="flex flex-col-reverse items-center h-1/4">
                    <span class="bg-cian-light text-lg text-white font-extralight text-center rounded-full px-6 py-3 leading-3 w-1/2">
                       $135.15
                    </span>
                </div>
            </div>
        </a>
        <a href="" class="h-96 w-full">
            <div class="relative flex flex-col rounded-md shadow-inner w-full h-full bg-blue-900 px-3 py-6 hover:bg-turquoise-light transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
                <svg class="absolute bottom-0 left-0 mb-8 " viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="flex justify-center items-center h-2/4">
                
                    <div class="h-full w-full bg-white rounded-md">
                        imagen
                    </div>
                </div>
                <div class="flex flex-col space-y-3 h-1/4">
                    <span class="text-yellow-dark font-bold text-center text-xl">
                       Gunnar
                    </span>
                    <span class="text-white font-extralight text-lg text-left">
                        Gunnar Lentes Protección Computadora Originales Crystal Full
                    </span>
                </div>
                <div class="flex flex-col-reverse items-center h-1/4">
                    <span class="bg-cian-light text-lg text-white font-extralight text-center rounded-full px-6 py-3 leading-3 w-1/2">
                       $260.00
                    </span>
                </div>
            </div>
        </a>
        
        
    
    </div>
</div>

<br>
<br>


<div>
    <div class="relative text-blue-500 px-6 pb-6 mt-6">
        <span class="text-black font-bold text-center text-4xl">Las Mejores Marcas  </span>
        <span class="text-blue-500 font-bold text-center text-base hover:text-yellow-500">Ver mas Marcas</span>
    </div>
    
    <div class="px-3 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
        <a href="" class="h-52 w-full">
                <div class="relative flex flex-col rounded-md shadow-inner w-full h-full bg-blue-900 px-3 py-6 hover:bg-turquoise-light transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
                    <svg class="absolute bottom-0 left-0 mb-8 " viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                    </svg>
                    <div class="flex justify-center items-center h-3/4">
                    
                        <div class="h-full w-full bg-white rounded-md">
                            imagen
                        </div>
                    </div>
                    <div class="flex flex-col space-y-3 h-1/4">
                        <span class="text-yellow-dark font-bold text-center text-xl">
                        CARISTA
                        </span>
                        
                    </div>
                    
                </div>
        </a>
        <a href="" class="h-52 w-full">
            <div class="relative flex flex-col rounded-md shadow-inner w-full h-full bg-blue-900 px-3 py-6 hover:bg-turquoise-light transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
                <svg class="absolute bottom-0 left-0 mb-8 " viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="flex justify-center items-center h-3/4">
                
                    <div class="h-full w-full bg-white rounded-md">
                        imagen
                    </div>
                </div>
                <div class="flex flex-col space-y-3 h-1/4">
                    <span class="text-yellow-dark font-bold text-center text-xl">
                       VCDS
                    </span>
                    
                </div>
                
            </div>
        </a>
        <a href="" class="h-52 w-full">
            <div class="relative flex flex-col rounded-md shadow-inner w-full h-full bg-blue-900 px-3 py-6 hover:bg-turquoise-light transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
                <svg class="absolute bottom-0 left-0 mb-8 " viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="flex justify-center items-center h-3/4">
                
                    <div class="h-full w-full bg-white rounded-md">
                        imagen
                    </div>
                </div>
                <div class="flex flex-col space-y-3 h-1/4">
                    <span class="text-yellow-dark font-bold text-center text-xl">
                       SAX Shields
                    </span>
                    
                </div>
                
            </div>
        </a>
        <a href="" class="h-52 w-full">
            <div class="relative flex flex-col rounded-md shadow-inner w-full h-full bg-blue-900 px-3 py-6 hover:bg-turquoise-light transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
                <svg class="absolute bottom-0 left-0 mb-8 " viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="flex justify-center items-center h-3/4">
                
                    <div class="h-full w-full bg-white rounded-md">
                        imagen
                    </div>
                </div>
                <div class="flex flex-col space-y-3 h-1/4">
                    <span class="text-yellow-dark font-bold text-center text-xl">
                       ROSS TECH
                    </span>
                    
                </div>
                
            </div>
        </a>
        
        
    
    </div>
</div>

<br>
<br>

<div>
    <div class="relative text-blue-500 px-6 pb-6 mt-6">
        <span class="text-black font-bold text-center text-4xl">Categorías populares  </span>
        
    </div>
    
            <section class="container mx-auto px-6 my-1 flex flex-wrap -m-4">
           
            <div class="p-2 md:w-40 ">
                <div class="flex items-center p-4 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100">
                    
                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Symfony icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class="text-xs font-medium ml-2 ">
                        Celulares y ..
                    </p>
                    
                    </div>
                </div>
            </div>
            <div class="p-2 md:w-40 ">
                <div class="flex items-center p-4 bg-purple-300 rounded-lg shadow-xs cursor-pointer hover:bg-purple-500 hover:text-gray-100">
                    
                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>HTML5 icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium ml-2 ">
                        Accesorios Vehiculos
                    </p>
                    
                    </div>
                </div>
            </div>

            <div class="p-2 md:w-40 ">
                <div class="flex items-center p-4 bg-green-200 rounded-lg shadow-xs cursor-pointer hover:bg-green-500 hover:text-gray-100">
                    
                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Vue.js icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium ml-2 ">
                        Calzado
                    </p>
                    
                    </div>
                </div>
            </div>
            <div class="p-2 md:w-40 ">
                <div class="flex items-center p-4 bg-yellow-200 rounded-lg shadow-xs cursor-pointer hover:bg-yellow-500 hover:text-gray-100">
                    
                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>JavaScript icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium text-uppercase ml-2 ">
                        Pantalones
                    </p>
                    
                    </div>
                </div>
            </div>
            <div class="p-2 md:w-40 ">
                <div class="flex items-center p-4 bg-indigo-200 rounded-lg shadow-xs cursor-pointer hover:bg-indigo-500 hover:text-gray-100">
                    
                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>CSS3 icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium ml-2 ">
                        Impresoras y ..
                    </p>
                    
                    </div>
                </div>
            </div>
            <div class="p-2 md:w-40 ">
                <div class="flex items-center p-4 bg-red-200 rounded-lg shadow-xs cursor-pointer hover:bg-red-500 hover:text-gray-100">
                    
                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Laravel icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium ml-2 ">
                        Accesorios
                    </p>
                    
                    </div>
                </div>
            </div>


        </section>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="py-9 bg-white">
  <div class="max-w-6xl mx-auto px-2 sm:px-5 lg:px-8">
    

    <div class="mt-5">
      <dl class="space-y-8 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-8">
        

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-turquoise-light text-white">
              <!-- Heroicon name: outline/scale -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Seguridad, de principio a fin</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">
            <span>¿No te gusta? ¡Devuélvelo! </span>
            <br>
            <span>En Saxcarboutique, no hay nada que no puedas hacer,</span>
            <br>
            <span>porque estás siempre protegido.</span>
          </dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-turquoise-light text-white">
              <!-- Heroicon name: outline/lightning-bolt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Paga con tarjeta o en efectivo</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">
            Con Mercado Pago, tienes meses sin intereses con tarjeta o efectivo en puntos de pago. ¡Y siempre es seguro!
          </dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-turquoise-light text-white">
              <!-- Heroicon name: outline/annotation -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Contáctanos</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">
            <span>Ventas y servicio al cliente:</span>
            <br>
            <span>Lunes - Domingo 9:00am a 9:00pm</span>
            <br>
            <span>contacto@saxcarboutique.com.mx</span>
          </dd>
        </div>
      </dl>
    </div>
  </div>
</div>