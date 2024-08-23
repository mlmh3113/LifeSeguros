<template>
    <div class="flex flex-col justify-center items-center py-10 space-y-10 relative overflow-hidden">

        <img src="@/images/circle.svg" class="absolute top-0 -left-40 -z-50 h-60 " alt="circle_svg">
        <img src="@/images/circle.svg" class="absolute bottom-0 -right-40 -z-50 h-52 " alt="circle_svg">

        <h2 class="text-3xl font-semibold text-blue-900">Propósito Life</h2>
        <div class="flex flex-col md:grid md:grid-cols-4 gap-4 w-4/5 mx-auto">

            <article
                class="flex flex-col justify-evenly items-center text-center gap-1 col-span-1 h-80 border-2 border-teal-500  rounded-xl p-5">
                <div class="flex justify-center">
                    <img class="w-20" src="@/images/globe.svg" alt="Life Seguros">
                </div>
                <div class="flex flex-row gap-2">
                    <p class=" text-base text-balance text-blue-900"><strong>Nuestra visión a futuro</strong> es
                        asegurarnos de que ese futuro exista y sea mejor para
                        todos. Por eso, nos propusimos <strong>contribuir con la flora y la fauna de nuestro
                            país.</strong></p>
                </div>
            </article>
            <article
                class="flex flex-col justify-evenly items-center text-center gap-1 col-span-1 h-80 border-2 border-teal-500  rounded-xl p-5">
                <div class="flex justify-center">
                    <img class="w-20" src="@/images/clipBoard.svg" alt="Life Seguros">
                </div>
                <div class="flex flex-row gap-2">
                    <p class=" text-base text-balance text-blue-900"><strong>Cuando nos contratás</strong>, no solo
                        asegurás tus pertenencias, tu hogar, tu vida. También <strong>ayudás a preservar la vida
                            silvestre y cuidar el agua.</strong></p>
                </div>
            </article>
            <article
                class="flex flex-col justify-evenly items-center text-center gap-1 col-span-1 h-80 border-2 border-teal-500  rounded-xl p-5">
                <div class="flex justify-center">
                    <img class="w-20" src="@/images/dollar.svg" alt="Life Seguros">
                </div>
                <div class="flex flex-row gap-2">
                    <p  class=" text-base text-balance text-blue-900">Haremos un <strong>aporte económico</strong> para contribuir con dos proyectos: Bosques de Araucarias y Cuenca Río Mendoza. <strong>Vos vas a poder elegir cuál apoyar.</strong></p>
                </div>
            </article>
            <article
                class="flex flex-col justify-evenly items-center text-center gap-1 col-span-1 h-80 border-2 border-teal-500  rounded-xl p-5">
                <div class="flex justify-center">
                    <img class="w-20" src="@/images/star.svg" alt="Life Seguros">
                </div>
                <div class="flex flex-row gap-2">
                    <p  class=" text-base text-balance text-blue-900"><strong>Life será la primera compañía que proteja al ecosistema y la vida silvestre</strong> de problemas generados por el hombre, como incendios e inundaciones, entre otros.</p>
                </div>
            </article>






        </div>

        <a href="#" class="uppercase max-w-fit font-extrabold text-white bg-teal-500 px-5 py-3 rounded-lg ">Conocé
            más</a>

    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped></style>