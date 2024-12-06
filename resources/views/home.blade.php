<x-app-layout>


    <x-navs.navigationV
        classes="p-2 fixed w-full top-0 flex justify-between  bg-white text-black 
    text-xs items-center z-30 shadow-md"
        stylesLink=" py-3 ml-4 text-slate-500 hover:text-slate-900 hover:font-bold duration-300 hover:transform hover:translate-y-0.5 
    inline-flex items-center px-1 pt-1 hover:border-b-2 hover:border-rgba-blue-sky-200 leading-1 focus:outline-none focus:border-rgba-blue-sky-100 transition duration-200 ease-in-out" />

    <x-slot name="title">
        Home
    </x-slot>
    <section class="h-full grid ">
        <div class="w-full h-auto">
            <div
                class=" relative h-auto w-full rounded-lg bg-gradient-to-b from-rgba-blue-sky-100 to-rgba-blue-sky-200 flex items-center justify-center mt-24">

                <div id="default-carousel" class="relative w-full -z-0 flex flex-col justify-center" data-carousel="slide"
                    style="height: 800px">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden rounded-lg h-full">
                        <!-- Item 1 -->
                        <div class="hidden duration-1000 ease-in-out blur-sm" data-carousel-item>
                            <img src="https://img.freepik.com/fotos-premium/reparacion-motor-estacion-servicio-reparacion-autos_179755-5004.jpg?w=900"
                                class=" absolute object-cover -z-10 h-full block w-full opacity-70 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-1000 ease-in-out blur-sm" data-carousel-item>
                            <img src="https://img.freepik.com/foto-gratis/tema-reparacion-mantenimiento-automoviles-mecanico-uniforme-trabajando-servicio-automatico_627829-3918.jpg?size=626&ext=jpg&ga=GA1.1.1488620777.1713139200&semt=ais"
                                class="absolute object-cover -z-10 h-full block w-full opacity-70 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-1000 ease-in-out blur-sm" data-carousel-item>
                            <img src="https://www.wurth.com.ar/blog/wp-content/uploads/2023/09/Lubricante-para-auto.png"
                                class="absolute object-cover -z-10 h-full block w-full opacity-70 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-1000 ease-in-out blur-sm" data-carousel-item>
                            <img src="https://blog.way.com/wp-content/uploads/2023/04/111-1024x683.jpg"
                                class="absolute object-cover -z-10 h-full block w-full opacity-70 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="true"
                            aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>

                </div>
                <div class="absolute z-10 text-white text-center text-5xl p-5 leading-loose" id="title">
                    <p style="font-size: 40px; text-shadow: 10px 10px 10px rgba(10, 10, 10)">TALLER DE REPARACIÓN DE
                        AUTOMÓVILES</p>
                    <strong style="font-size: 80px">AUTOMOTRIZ TIPAN</strong>
                </div>
            </div>
            <article id="conocenos" class="h-auto relative grid md:grid-cols-2 sm:grid-cols-1 gap-14 p-10 border">
                <x-card name='Sobre Nosotros' image="./images/familyTipan.jpg">
                    <x-slot name="info">
                        <label>
                            Somos una familia de mecanicos que gracias al esfuerzo de todos
                            los que conformamos automotriz Tipan podemos seguir adelante,
                            ofreciendo y brindando nuestros servicios de
                            <strong class=" text-cyan-400">
                                mecanizado y reparacion de automoviles.
                            </strong>
                        </label>
                    </x-slot>
                </x-card>
                <x-card name='Nuestra Historia' image="./images/workTipan.jpg">
                    <x-slot name="info">
                        <label>
                            Todo empezó con un sueño, donde solo en mi imaginación
                            pensaba tener algo tan grande, pero gracias al esfuerzo de mi
                            esposa y el mío logramos comprar poco a poco cada herramienta cada
                            máquina, todo el esfuerzo de largos años ahora se ve reflejado en
                            este taller que logramos formar; ahora somos un grupo de trabajo,
                            de familia y de amigos, todos los que conformamos
                            <strong class=" text-cyan-400">AUTOMOTRIZ TIPÁN</strong>
                            servimos a nuestros clientes, haciendo lo que nos gusta.
                        </label>
                    </x-slot>
                </x-card>
            </article>
            <article id="servicios" class="relative border-t border-black">
                <p class="text-black text-5xl text-center my-10 leading-relaxed" style="letter-spacing: 10px">
                    SERVICIOS QUE PODEMOS OFRECERTE
                </p>

                <section class="servicesCont gap-5 p-3">
                    <x-infoCard title="Reparación del Motor"
                        image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBMlSSLCAu8LUfs_2FSe81WYYKnH6T6CAeTw&usqp=CAU">
                        <x-slot name="description">
                            En Servicios Automotriz Tipán nos especializamos en la reparación de motores desde los
                            vehículos
                            más antiguos hasta la gama más moderna de autos.
                        </x-slot>
                    </x-infoCard>
                    <x-infoCard title="Reparación de cajas manuales"
                        image="https://estaticos.qdq.com/swdata/photos/173/173945786/6d4065022adf436aa6facf005ec6f3f8.jpg">
                        <x-slot name="description">
                            La degradación del aceite, el desgaste de rodamientos y el exceso de kilómetros puede
                            generar problemas en la caja de cambios. En Servicio Automotriz Tipán realizamos un
                            diagnóstico
                            previo al problema y buscaremos solventar cualquier situación.
                        </x-slot>
                    </x-infoCard>
                    <x-infoCard title="Mantenimiento del automovil"
                        image="https://www.revistaautocrash.com/wp-content/uploads/2022/06/Mecanica_65.jpg">
                        <x-slot name="description">
                            Siempre hay que chequear el carro, porque en algún momento imprevisto puede averiarse
                            cualquier
                            parte. En Automotriz Tipán realiza un mantenimiento del vehículo.
                        </x-slot>
                    </x-infoCard>
                    <x-infoCard title="Cambios de aceite"
                        image="https://assets-global.website-files.com/60aea4e5ac6df63edce0b8b4/617883ba9e872bd94dc5e388_Cambio-de-aceite-de-motor-automotriz-v001-1-1024x518.jpeg">
                        <x-slot name="description">
                            El objetivo principal del cambio de aceite y filtro es que mediante el reemplazo de las
                            mismas,
                            las piezas del motor logren un correcto engranaje reduciendo la fricción entre ellas y
                            permitiendo
                            un mejor rendimiento del automovil.
                        </x-slot>
                    </x-infoCard>
                    <x-infoCard title="ABC de motor"
                        image="https://mlyyve7x2me5.i.optimole.com/w:1200/h:800/q:mauto/f:best/https://www.interllanta.com/wp-content/uploads/2023/05/abc-de-motor-.jpg">
                        <x-slot name="description">
                            Es el mantenimiento periódico que se le debe realizar al motor con el fin de prevenir fallas
                            de
                            funcionamiento. Esto incluye cambio de bujias, aceites, platino y condensador más el cambio
                            de
                            la banda de la distribución.
                        </x-slot>
                    </x-infoCard>
                    <x-infoCard title="Limpieza de inyectores"
                        image="https://www.lubricantesanmiguel.cl/wp-content/uploads/2021/05/limpieza-de-inyectores-bencinero-bencina-ultra-sonido.jpg">
                        <x-slot name="description">
                            Es importante realizar esta limpieza porque cuando el motor está en funcionamiento acumula
                            residuos de impurezas de combustible y carbón lo que obstruye la correcta distribución del
                            combustible.
                        </x-slot>
                    </x-infoCard>
                    <x-infoCard title="Reparación del embrague"
                        image="https://seguros.elcorteingles.es/content/dam/eci-seguros/es/blog/blog-marzo-2013/cambio-embrague-coche-motor.jpg">
                        <x-slot name="description">
                            El embrague es un dispositivo mecánico responsable de activar y desactivar la transmisión de
                            energía de conducción. Los signos de que este se encuentre averiado son varios pero los más
                            específicos
                            es cuando tarda en arrancar o no nos permite poner el auto en reversa o en marcha
                        </x-slot>
                    </x-infoCard>
                    <x-infoCard title="Sistema eléctrico"
                        image="https://www.nitro.pe/images/2016/diciembre/sistema_electrico.jpg">
                        <x-slot name="description">
                            Estos sistemas comprenden la revisión del alternador, el chequeo del motor de arranque y el
                            funcionamiento
                            de las luces y el sistema eléctrico como tal.
                        </x-slot>
                    </x-infoCard>
                </section>
            </article>
            <article class="positionCont mt-10 border-t border-black py-28">
                <aside class="p-5">
                    <h2 class="text-2xl">
                        <b>Nos puedes encontrar en:</b>
                    </h2>
                    <p class="mt-5 text-base">
                        Estamos ubicados por la calle Eugenio Espejo e3-38
                    </p>
                    <p class="mt-5 text-base">
                        Localidad de <strong>Amaguaña</strong>
                    </p>
                    <p class="mt-5 text-base  ">
                        <strong>Teléfono:</strong> 0991821434
                    </p>
                    <a href="https://www.google.com/maps/dir/Mecanica+Automotriz+tipan/AUTOMOTRIZ+%22AMAGUA%C3%91A%22/@-0.3803704,-78.506431,18z/data=!4m13!4m12!1m5!1m1!1s0x91d5a5c359e8bb17:0xbba73c7d020a2c15!2m2!1d-78.5066128!2d-0.3808944!1m5!1m1!1s0x91d5a5850d4380f5:0x960602f2e4c579d7!2m2!1d-78.5036942!2d-0.3791817?entry=ttu"
                        target="_blank" rel="noreferrer"
                        class="inline-flex items-center p-4 bg-rgba-blue-sky-200 text-white rounded-md hover:bg-rgba-blue-sky-200
     text-sm active:transform active:translate-y-1 transition-all hover:ring cursor-pointer mt-5">
                        <b class="text-md">Como LLegar</b>
                    </a>
                </aside>

                <div class="grid place-content-center p-5 shadow-2xl">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d2513.372510128527!2d-78.5072796749955!3d-0.3811122025286861!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x91d5a5c359e8bb17%3A0xbba73c7d020a2c15!2sMecanica%20Automotriz%20tipan%2C%20Eugenio%20Espejo%2C%20Amagua%C3%B1a!3m2!1d-0.38089419999999996!2d-78.5066126!5e0!3m2!1ses-419!2sec!4v1704675367021!5m2!1ses-419!2sec"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerPolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </article>
        </div>
        <x-footer />
    </section>

</x-app-layout>
