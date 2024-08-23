<template>
  <div id="indicators-carousel" class="relative w-full mt-1" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-96">
      <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img src="@/Images/hero-home-campania-dsktp.jpg"
          class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
        <div
          class="absolute flex flex-col justify-between transform -translate-y-1/2 left-20 right-5 top-1/2 space-y-5">
          <h1 class="md:text-4xl font-semibold text-white">
            Un seguro que te protege a vos <br />
            <strong class="font-semibold"> y también todo lo que <br> te rodea </strong>
          </h1>
          <a href="#"
            class="uppercase max-w-fit font-extrabold text-white bg-teal-500 px-5 py-3 rounded-lg ">conocenos</a>

        </div>
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="@/Images/hero-home-mi-hogar-desktop.jpg"
          class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
        <div
          class="absolute flex flex-col justify-between transform -translate-y-1/2 left-20 right-5 top-1/2 space-y-5">
          <h1 class="md:text-4xl font-semibold text-teal-500">
            Un seguro de hogar <br />
            <strong class="text-blue-900 font-normal">que también protege el <br> hábitat de miles de
              <br>especies</strong>
          </h1>
          <a href="#" class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg ">¡lo
            quiero!</a>

        </div>
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="@/Images/hero-home-mi-mascota-desktop.jpg"
          class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
        <div
          class="absolute flex flex-col justify-between transform -translate-y-1/2 left-20 right-5 top-1/2 space-y-5">
          <h1 class="md:text-4xl font-semibold text-teal-500">
            Un seguro de mascota <br />
            <strong class="text-blue-900 font-normal">que también protege <br>animales silvestres
            </strong>
          </h1>
          <a href="#" class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg">¡lo
            quiero!</a>

        </div>
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="@/Images/hero-home-mi-tecnologia-desktop.jpg"
          class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
        <div
          class="absolute flex flex-col justify-between transform -translate-y-1/2 left-20 right-5 top-1/2 space-y-5">
          <h1 class="md:text-4xl font-semibold text-teal-500">
            Un seguro de tecnologia <br />
            <strong class="font-semibold text-blue-900"> que también protege <br> un recurso vital:<br> el agua
            </strong>
          </h1>
          <a href="#" class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg">¡lo
            quiero!</a>
        </div>
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="@/Images/hero-home-mi-vida-desktop.jpg"
          class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
        <div
          class="absolute flex flex-col justify-between transform -translate-y-1/2 left-20 right-5 top-1/2 space-y-5">
          <h1 class="md:text-4xl font-semibold text-teal-500">
            Un seguro de vida <br />
            <strong class="font-semibold text-blue-900"> que también protege la vida <br> de todo lo que te rodea

            </strong>
          </h1>
          <a href="#" class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg">¡lo
            quiero!</a>
        </div>
      </div>
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="@/Images/hero-home-mis-accidentes-personales-desktop.jpg"
          class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />

        <div
          class="absolute flex flex-col justify-between transform -translate-y-1/2 left-20 right-5 top-1/2 space-y-5">
          <h1 class="md:text-4xl font-semibold text-teal-500">
            Un seguro de accidentes <br>personales <br />
            <strong class="font-semibold text-blue-900"> que también protege <br> a la naturaleza

            </strong>
          </h1>
          <a href="#" class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg">¡lo
            quiero!</a>
        </div>
      </div>
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="@/Images/hero-origenes-desktop.jpg"
          class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />

              <div class="absolute flex flex-col justify-between transform -translate-y-1/2 left-20 right-5 top-1/2 space-y-5">
        <h1 class="md:text-4xl font-semibold text-white">
          Ahora <strong>Origenes Seguros </strong><br> se suma a <strong>Live Seguros</strong> </h1>
       
      </div>
      </div>

  
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
      <!-- <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
        data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
        data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
        data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
        data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
        data-carousel-slide-to="4"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
        data-carousel-slide-to="5"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
        data-carousel-slide-to="6"></button> -->

    </div>
    <!-- Slider controls -->
    <button type="button"
      class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-prev>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button"
      class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-next>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>
</template>

<script setup></script>
