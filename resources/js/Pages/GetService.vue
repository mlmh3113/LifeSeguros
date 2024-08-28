<template>

    <Head title="Contacto" />

    <Header />

    <div class="w-full md:mt-20 mx-auto md:max-w-7xl px-2">
 <div class="grid grid-cols-2 p-2 rounded-md shadow-md shadow-gray-400 md:border-2 md:border-teal-500">

        <div class="col-span-2 md:col-span-1 flex flex-col justify-evenly md:px-20 gap-5">

            <h1 class="justify-self-start text-4xl font-bold text-teal-500">Contactanos</h1>

            <p class="justify-self-start text-blue-800 text-xl font-medium text-pretty ">Asegurate de disfrutar con quienes más amás, sabiendo que estás protegido por nosotros.
                Contá con un respaldo económico para vos y tu familia ante las eventualidades de la vida.</p>

            <p class="justify-self-start text-pink-500 text-xl font-medium text-pretty" >
                Con cada póliza que contratás, podés elegir qué proyecto acompañar para ayudar a preservar el medio
                ambiente.
            </p>

        </div>

        <div class="mt-5 md:mt-0 col-span-2 md:col-span-1 flex flex-col justify-center items-center md:p-20  rounded-md md:bg-[url('https://res.cloudinary.com/dkoocayxp/image/upload/v1724886642/lifeseg/hero-proposito-life-desktop_xgdp8b.jpg');] bg-cover"  >

            <form class="w-full" @submit.prevent="submit">

                <div>

                    <TextInput id="fullname" type="text" class="mt-1 block w-full " v-model="form.fullname" required
                        autocomplete="fullname" placeholder="Nombre y apellido" autofocus />

                    <InputError class="mt-2" :message="form.errors.fullname" />
                </div>
                <div>


                    <TextInput id="email" type="text" class="mt-1 block w-full" v-model="form.email" required
                        autocomplete="email" placeholder="Correo electronico" />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class=" mt-2">


                    <TextInput id="area" type="text" class="mt-1 block w-full" v-model="form.area" required
                        autocomplete="area" placeholder="Area" />

                    <InputError class="mt-2" :message="form.errors.area" />
                </div>
                <div class=" mt-2">


                    <TextInput id="phone" class="mt-1 block w-full" v-model="form.phone" required rows="5"
                        autocomplete="phone" name="phone" placeholder="Cel" />


                    <InputError class="mt-2" :message="form.errors.phone" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button
                        class="w-full text-white bg-pink-500 uppercase py-2 px-6 border-2 border-[#34D6E2] rounded-md font-bold hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out hover:text-[#34D6E2] hover:border-white">
                        Enviar
                    </button>
                </div>
            </form>


        </div>




    </div>
    </div>


    <Footer />
    

   
</template>

<script setup>
import Header from '../Components/Custom/Header.vue';
import Footer from '../Components/Custom/Footer.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';


const form = useForm({
    fullname: '',
    email: '',
    area: '',
    phone: '',

});


</script>
