<template>
  <nav class="bg-slate-200 border-gray-200 dark:bg-gray-900 dark:border-gray-700 w-full shadow-md z-40 sticky top-0 ">
    <div class="max-w-screen flex flex-wrap items-center justify-center mx-auto bg-teal-500 text-white gap-10" :class="tranlate? '' : 'hidden'" >
      <p class="capitalize font-bold text-sm" >telefono: 0 800 222 4589</p>
      <p  class="capitalize font-bold text-sm">mail: contacto@live-seguros.com</p>
    </div>
    <div
      class="flex flex-wrap items-center justify-between mx-auto p-4"
    >
      <a :href="route('index')" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img
          src="@/Images/insurance.svg"
          class="h-8"
          
        />
        <span
          class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
          >Live Seguros.</span
        >
      </a>
      <button
        data-collapse-toggle="navbar-dropdown"
        type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-dropdown"
        aria-expanded="false"
      >
        <span class="sr-only">Open main menu</span>
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 17 14"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15"
          />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul
          class="flex flex-col font-medium p-4 md:p-0 mt-4 border  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
        >

          <li>
            <button
              id="dropdownNavbarLink"
              data-dropdown-toggle="dropdownNavbar1"
              class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-teal-500 md:p-0 md:w-auto dark:text-white md:dark:hover:text-teal-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
            >
              Productos
              <svg
                class="w-2.5 h-2.5 ms-2.5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 4 4 4-4"
                />
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div
              id="dropdownNavbar1"
              class="z-40 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
            >
              <ul
                class="py-2 text-sm text-gray-700 dark:text-gray-400"
                aria-labelledby="dropdownLargeButton"
              >
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-slate-200 hover:text-teal-500 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Mi Vida </a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-slate-200 hover:text-teal-500 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Mi Hogar</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-slate-200 hover:text-teal-500 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Mi Mascota</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-slate-200 hover:text-teal-500 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Mi Tecnologia</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-slate-200 hover:text-teal-500 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Mis Accidentes Personales</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-slate-200 hover:text-teal-500 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Caucion de Alquiler</a
                  >
                </li>
              </ul>
    
            </div>
          </li>
          <!-- <li>
            <a
              href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-teal-500 md:p-0 dark:text-white md:dark:hover:text-teal-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              >Empresas</a
            >
          </li> -->

          <li>

            <a :href="route('service')">Contactanos</a>

            <!-- <button
              id="dropdownNavbarLink"
              data-dropdown-toggle="dropdownNavbar"
              class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-teal-500 md:p-0 md:w-auto dark:text-white md:dark:hover:text-teal-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
            >
              Contactanos
              <svg
                class="w-2.5 h-2.5 ms-2.5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 4 4 4-4"
                />
              </svg>
            </button>
          
            <div
              id="dropdownNavbar"
              class="z-40 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
            >
              <ul
                class="py-2 text-sm text-gray-700 dark:text-gray-400"
                aria-labelledby="dropdownLargeButton"
              >
              
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-slate-200 hover:text-teal-500 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Portal Clientes</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-slate-200 hover:text-teal-500 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Denuncia que te paso</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-slate-200 hover:text-teal-500 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Nuestros Canales de Atencion</a
                  >
                </li>

             
              </ul>
    
            </div> -->
          </li>


          
          <li>
            <a
              :href="route('about')"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-teal-500 md:p-0 dark:text-white md:dark:hover:text-teal-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              >Quienes Somos</a
            >
          </li>
          <!-- <li>
            <a
              href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-teal-500 md:p-0 dark:text-white md:dark:hover:text-teal-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              >Blog</a
            >
          </li> -->
          <!-- <li>
            <a
              href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-teal-500 md:p-0 dark:text-white md:dark:hover:text-teal-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              >Proposito Life</a
            >
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
</template>

<script setup>

import { ref } from 'vue';

const tranlate = ref(true);

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    tranlate.value = false;
  } else {
    tranlate.value = true;
  }
});

</script>
