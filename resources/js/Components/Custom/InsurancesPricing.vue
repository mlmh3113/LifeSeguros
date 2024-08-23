<template>
    <div class="flex flex-col justify-center items-center bg-teal-500 py-10 rounded-r-[50px] space-y-5">
        <hr class="col-span-2 bg-white h-1 border-none w-1/3 text-center">
        <h2 class="text-4xl  text-white text-center">
            ¡Nuestros seguros <br> <strong> al mejor precio!</strong>
        </h2>
        <hr class="col-span-2 bg-white h-1 border-none w-1/3 text-center">
        <p class="text-white text-xl">Somos un seguro que te protege a vos y también a todo lo que te rodea.</p>
        <p class="text-white text-xl"><strong>Nos adaptamos a tus necesidades,</strong> solo tenés que decidir qué plan
            Live querés para vos.</p>
   

    <div
        class="swiffy-slider slider-item-show3  slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
        <ul class="slider-container py-4">
            <li class="slide-visible bg-white rounded-xl shadow-md  ">
                <div class="card shadow h-full justify-center flex flex-col space-y-10 items-center py-5 ">
                    <img src='@/Images/moscota.svg' class="w-20 card-img-top" loading="lazy" alt="...">
                    <div class="card-body flex flex-col space-y-10 ">
                        <h3 class="card-title text-blue-900 text-center text-3xl font-semibold ">Mi mascota</h3>
                        <div class="flex flex-col space-y-5 items-center">
                            <a :href="route('service')"
                                class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg shadow-md ">¡lo
                                quiero!</a>
                            <p class="price text-xl text-blue-900">Desde <strong>2.530/mes</strong></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slide-visible bg-white rounded-xl shadow-md  ">
                <div class="card shadow h-full justify-center flex flex-col space-y-10 items-center py-5 ">
                    <img src='@/Images/hogar.svg' class=" w-20 card-img-top" loading="lazy" alt="...">
                    <div class="card-body flex flex-col space-y-10 ">
                        <h3 class="card-title text-blue-900 text-center text-3xl font-semibold ">Mi hogar</h3>
                        <div class="flex flex-col space-y-5 items-center">
                            <a href="#"
                                class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg shadow-md ">¡lo
                                quiero!</a>
                            <p class="price text-xl text-blue-900">Desde <strong>3.599/mes</strong></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slide-visible bg-white rounded-xl shadow-md  ">
                <div class="card shadow h-full justify-center flex flex-col space-y-10 items-center py-5 ">
                    <img src='@/Images/vida.svg' class=" w-20 card-img-top" loading="lazy" alt="...">
                    <div class="card-body flex flex-col space-y-10 ">
                        <h3 class="card-title text-blue-900 text-center text-3xl font-semibold ">Mi Vida</h3>
                        <div class="flex flex-col space-y-5 items-center">
                            <a href="#"
                                class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg shadow-md ">¡lo
                                quiero!</a>
                            <p class="price text-xl text-blue-900">Desde <strong>3.333/mes</strong></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slide-visible bg-white rounded-xl shadow-md  ">
                <div class="card shadow h-full justify-center flex flex-col space-y-10 items-center py-5 ">
                    <img src='@/Images/tecnologia.svg' class=" w-14 card-img-top" loading="lazy" alt="...">
                    <div class="card-body flex flex-col space-y-10 ">
                        <h3 class="card-title text-blue-900 text-center text-3xl font-semibold ">Mi Tecnologia</h3>
                        <div class="flex flex-col space-y-5 items-center">
                            <a href="#"
                                class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg shadow-md ">¡lo
                                quiero!</a>
                            <p class="price text-xl text-blue-900">Desde <strong>5.034/mes</strong></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slide-visible bg-white rounded-xl shadow-md  ">
                <div class="card shadow h-full justify-center flex flex-col space-y-10 items-center py-5 ">
                    <img src='@/Images/accidentes.svg' class=" w-14 card-img-top" loading="lazy" alt="...">
                    <div class="card-body flex flex-col space-y-10 ">
                        <h3 class="card-title text-blue-900 text-center text-3xl font-semibold ">Mis Accidentes Personales</h3>
                        <div class="flex flex-col space-y-5 items-center">
                            <a href="#"
                                class="uppercase max-w-fit font-extrabold text-white bg-pink-500 px-5 py-3 rounded-lg shadow-md ">¡lo
                                quiero!</a>
                            <p class="price text-xl text-blue-900">Desde <strong>2.995/mes</strong></p>
                        </div>
                    </div>
                </div>
            </li>










        </ul>

        <button type="button" class="slider-nav" aria-label="Go left"></button>
        <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
        <div class="slider-indicators">
        <button class="active" aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
  
    </div>
    </div>


</div>
</template>

<script setup>
import { onMounted , ref } from 'vue';
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';



import { useServicesStore } from '@/Stores/services';



const servicesStore = useServicesStore();
const services = ref([]);

onMounted(async () => {
    await servicesStore.getServices();
    services.value = servicesStore.services;
});








</script>
