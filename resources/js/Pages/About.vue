<template>

    <Head title="Conocenos" />

    <Header />

    <div class=" grid grid-cols-3 my-20 w-full md:mt-20 px-20 md:max-w-7xl mx-auto bg-gray-200 p-20 rounded-md border-2 border-teal-500 shadow-md shadow-gray-400  ">

        <div class="col-span-1 flex flex-col gap-5 justify-start">

            <p class="text-pretty text-6xl font-bold text-teal-500">Desde <span>1922</span></p>
            <p class="text-pretty text-2xl font-bold text-blue-500">Sembrando tranquilidad</p>

            
        </div>

        <div class="col-span-2 flex flex-col gap-5">

            <p class="text-pretty">Fundada a principios del Siglo XX (30 de Mayo de 1922), su espíritu cooperativo ha permanecido intacto a
                través de los años tendiendo a favorecer a los agricultores que la conforman, abonando los daños en
                mejor forma y tiempo, con la menor prima resultante. Así encontramos como se han efectuado numerosos
                retornos y devoluciones de primas por haberse registrado años de escasa siniestralidad. Sus índices de
                solvencia y responsabilidad ya son los más altos del mercado asegurador argentino. Otro dato de
                importancia lo constituye su forma de facturar, en la que sólo se incluye la prima contratada. No
                existen gastos administrativos ni gastos de tasación. Lo cual deriva en un porcentaje final de prima, de
                las más bajas del mercado.</p>

            <p class="text-pretty">El equipo de tasadores lo conforman casi 40 asociados altamente capacitados y con amplia experiencia,
                habiéndose incorporado elementos de última tecnología: notebooks, equipos de comunicaciones, G.P.S. Al
                igual que la revisión constante de los manuales de tasación por medio de profesionales del Inta y
                Universidades extranjeras. Al poseer tasadores ad-honoren, al igual que los miembros del Consejo de
                Administración y una estructura reducida a la mínima expresión, es que se han conseguido logros
                formidables. No posee intermediarios (agentes ni corredores). Todo ello hace de los gastos operativos
                los más bajos del mercado y por consiguiente no encarece la póliza emitida.</p>


        </div>

    </div>

    <Footer />

</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Custom/Header.vue';
import Footer from '@/Components/Custom/Footer.vue';
</script>
