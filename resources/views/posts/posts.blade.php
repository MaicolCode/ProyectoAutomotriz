<x-app-layout>
    
    <x-navs.navigationV
    classes="p-2 fixed w-full top-0 flex justify-between  bg-white text-black 
text-xs items-center z-30 shadow-md"
    stylesLink=" py-3 ml-4 text-slate-500 hover:text-slate-900 hover:font-bold duration-300 hover:transform hover:translate-y-0.5 
inline-flex items-center px-1 pt-1 hover:border-b-2 hover:border-rgba-blue-sky-200 leading-1 focus:outline-none focus:border-rgba-blue-sky-100 transition duration-200 ease-in-out" />
    <x-slot name="title">
        Posts
    </x-slot>
    
    <section class="relative w-full min-h-auto flex flex-col items-center">
        {{-- Seccion del Header --}}
        <div class="relative shadow-md flex items-center mt-40 sm:mt-10" style="height: 700px">
            <img src="https://www.nicepng.com/png/full/120-1207720_mecanico-de-cuerpo-entero.png"
                alt="mecanico-de-cuerpo-entero_By_NicePng" class="absolute bottom-0  right-[-20px] z-20 mr-10 w-32 lg:w-60">
            <article class="skewed bg-rgba-blue-sky-100">
            </article>
            <div class="px-10 sm:px-16 z-10">
                <b class="text-4xl text-white">Sección de recomendaciones</b>
                <hr>
                <p class="w-3/2 lg:w-3/5 mt-10 text-xl lg:text-lg font-medium text-slate-900 p-4 bg-gray-400 rounded-md bg-opacity-25">Automotriz Tipan a parte de ofrecerte sus servicios,
                    te ofrece contenido basado
                    en recomendaciones que contienen información relevante, la cual te permitira
                    la posibilidad de que tu mismo puedas mantener de una mejor forma tu vehiculo sin la necesidad
                    de acudir diariamente a un profesional!
                </p>
                <a href="#sectionPosts"
                    class="mt-10 inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Ir a los posts
                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        {{-- Seccion de las habilidades --}}
        <div class="my-10 relative shadow-md flex flex-col items-center w-[90%] lg:w-3/6 z-10 bg-blue-50 rounded-lg">
            <b class="text-3xl lg:text-4xl mt-10 text-center">Dentro de esta sección encontraras: </b>
            <div class="timeList mt-5 px-14 py-8 lg:px-20 lg:py-10">
                <ol class="relative border-s border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ms-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <ion-icon class="w-12 h-12 lg:w-6 lg:h-6" name="checkmark-done-circle-outline"></ion-icon>
                        <h3 class="text-xl lg:text-lg font-semibold text-rgba-blue-sky-100">Recomendaciones</h3>
                        <p class="text-md lg:text-sm font-normal text-gray-500 dark:text-gray-400">
                            Como podras ver la mayoria de las personas acuden a un profesional, debido a que su vehiculo
                            a presentado fallas,
                            esto se debe al mal estado en el que mantenemos a nuestro vehiculo, por ende te presentamos
                            una serie de instrucciones, que te seran de utilidad
                            para mantener de mejor forma tu vehiculo y evitar que el mismo falle.
                        </p>

                    </li>
                    <li class="mb-10 ms-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <ion-icon class="w-12 h-12 lg:w-6 lg:h-6" name="footsteps-outline"></ion-icon>
                        <h3 class="text-xl lg:text-lg font-semibold text-rgba-blue-sky-100">Instrucciones</h3>
                        <p class=" text-md lg:text-sm  font-normal text-gray-500 dark:text-gray-400">
                            El hacer mantenimiento sin haber tenido alguna experiencia, podria ocasionar algun tipo de
                            conflicto en el proceso, por ende en
                            esta seccion te afrecemos algunas instrucciones que deberas de seguir, para realizar el
                            mantenimiento de tu vehiculo de manera segura.
                        </p>
                    </li>
                    <li class="mb-10 ms-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <ion-icon class="w-12 h-12 lg:w-6 lg:h-6" name="construct-outline"></ion-icon>
                        <h3 class="text-xl lg:text-lg font-semibold text-rgba-blue-sky-100">Herramientas </h3>
                        <p class=" text-md lg:text-sm  font-normal text-gray-500 dark:text-gray-400">
                            El hacer uso de las herramientas adecuadas, al realizar algun mantenimiento
                            nos ayudaran a prevenir daños en los componentes de nuestro vehiculo, aqui te ofrecemos
                            información acerca de que herramientas
                            deberas usar para manipular de la mejor manera los componentes de tu vehiculo.
                        </p>
                    </li>

                    <li class="ms-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <ion-icon class="w-12 h-12 lg:w-6 lg:h-6" name="hand-right-outline"></ion-icon>
                        <h3 class="text-xl lg:text-lg font-semibold text-rgba-blue-sky-100">Precauciones</h3>
                        <p class=" text-md lg:text-sm  font-normal text-gray-500 dark:text-gray-400">
                            Al realizar un mantenimiento, hay que tener en cuenta las precauciones que se deben de
                            tomar a la hora de que nos ponemos a manipular las piezas de nuestro vehiculo, estas
                            evitaran que dañemos
                            los componentes del mismo o que suframos algun daño dentro del proceso.
                        </p>
                    </li>
                </ol>
            </div>
        </div>
        {{-- Seccion de posts --}}
        <div class=" relative shadow-md flex flex-col bg-gray-500 w-full p-2" style="height: 750px" id="sectionPosts">

            <article class="skewed opacity-90 bg-rgba-blue-sky-200 ">
            </article>
            {{-- Seccion Header Posts --}}
            <div class=" px-20 py-14 z-10">
                <h2 class="text-5xl text-center text-white">Posts</h2>
                <hr>
            </div>
            {{-- Seccion del carrusel de Posts --}}
            <div class="flex justify-center">
                <div id="indicators-carousel" class="relative w-[90%] sm:w-3/5 z-0" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="flex w-full relative overflow-hidden rounded-md shadow-[0_4px_10px_1px_rgba(0,0,0,0.4)] md:h-96" style="height: 500px">
                        <!-- Item 1 -->
                        <div class="flex duration-1000 ease-in-out  justify-center w-full h-full" 
                            data-carousel-item="active">
                            <div
                                class="relative flex py-40 sm:items-center justify-center p-6 bg-white rounded-lg dark:bg-gray-400 dark:border-gray-700 dark:bg-opacity-40 w-full">
                                <h2 class="text-xl sm:text-2xl text-white text-center">Aquí verás todo el contenido compartido por la empresa.</h2>

                            </div>
                        </div>

                        @foreach ($posts as $post)
                            <div class="flex duration-1000 ease-in-out  justify-center h-full"
                                data-carousel-item>
                                <div
                                    class="relative  max-w-4xl bg-white rounded-lg dark:bg-gray-400  dark:border-gray-700 dark:bg-opacity-50 w-full">
                                    <img class="absolute top-0 left-0 object-cover rounded-t-lg  w-full h-2/4 -z-0"
                                        src="{{ $post->image }}" alt="" />
                                    <div class="relative flex w-2/4 h-2/4 items-center">
                                        <h5
                                            class="z-20 mx-10 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $post->title }}</h5>
                                    </div>
                                    <div class="p-5 w-full">
                                        <p
                                            class="mb-3 lg:text-base font-normal text-gray-700 dark:text-white h-32 overflow-hidden">
                                            {{ $post->description }}
                                        </p>
                                        <a href="{{ route('posts.show', $post->id) }}"
                                            class="inline-flex absolute right-0 mr-10 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Leer mas...
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>


        </div>
        <x-footer />
    </section>

</x-app-layout>
