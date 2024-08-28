<template>

    <Head title="Vida" />
    <Header />

    <div class="m-5 relative max-w-7xl md:mx-auto h-[calc(80vh-5rem)] mt-20 rounded-md overflow-hidden ">
        <img class="absolute top-0 left-0 w-full h-full md:object-cover"
            src="https://res.cloudinary.com/dkoocayxp/image/upload/v1724885237/lifeseg/hero-home-mis-accidentes-personales-desktop_wjcpgo.jpg"
            alt="">
        <div class="absolute top-0 left-0 w-1/2 h-full flex flex-col justify-around items-start">

            <div>
                <img class="w-10 md:w-10" src="@/Images/accidentes.svg" alt="vida-icono">

                <h2 class="text-xl md:text-3xl font-semibold text-blue-900">Mis Accidentes Personales
                </h2>
            </div>


            <p class="text-blue-900 text-sm md:text-xl">
                Aseguramos tu forma de vivir. Que los accidentes sean solamente una anécdota.
            </p>

            <p class="text-teal-500 text-sm md:text-xl">
                Con cada póliza que contratás, podés elegir qué proyecto acompañar para ayudar a preservar el medio
                ambiente.
            </p>

            <a :href="route('service')"
                class="w-full md:w-auto text-white bg-pink-500 uppercase py-2 px-6 border-2 border-[#34D6E2] rounded-md font-bold hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out hover:text-[#34D6E2] hover:border-white">
                >Conoce más</a>




        </div>

    </div>

    <Footer />
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Custom/Header.vue';
import Footer from '@/Components/Custom/Footer.vue';

</script>
