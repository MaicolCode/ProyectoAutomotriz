<x-app-layout>
    <x-slot name="title">
        Contactar
    </x-slot>
    <x-navs.navigationV
        classes="p-2 fixed w-full top-0 flex justify-between  bg-white text-black 
    text-xs items-center z-30 shadow-md"
        stylesLink=" py-3 ml-4 hover:text-slate-900 hover:font-bold duration-300 hover:transform hover:translate-y-0.5
    inline-flex items-center px-1 pt-1 hover:border-b-2 hover:border-rgba-blue-sky-200 leading-1 focus:outline-none focus:border-rgba-blue-sky-100 transition duration-200 ease-in-out" />
    <section class="h-full grid">
        <div class="w-screen sm:w-full h-auto">
            {{-- Primera seccion de la presentación --}}
            <div
                class="relative mt-14 sm:mt-24 h-auto bg-gradient-to-b from-rgba-blue-sky-100 to-rgba-blue-sky-200 shadow-md
    shadow-rgba-blue-sky-200 flex flex-col items-center">
                <div class="flex flex-col items-center justify-end pt-20">
                    <h1 class="text-3xl sm:text-4xl text-blue-100 font-black text-center">
                        ¿Quieres contactar con nosotros?
                    </h1>
                    <p class="w-auto px-5 sm:w-3/4 text-lg sm:text-2xl text-blue-100 mt-5">Si tienes dudas e inconvenientes con
                        los
                        servicios que
                        ofrecemos, o por los servicios que quieres que te realicemos puedes comunicarte directamente con
                        nosotros desde las siguientes fuentes:</p>
                </div>
                {{-- Segunda seccion de la presentación --}}
                <div class="pt-20 pb-36 grid gap-20 grid-cols-1 lg:grid-cols-2 items-center">
                    {{-- Whatsapp --}}
                    <a href="https://api.whatsapp.com/send?phone=5930994736521&text=Número%20telefonico%20técnico%20Marco%20Tipan"
                        target="_blank"
                        class="w-56 h-56 bg-white flex flex-col items-center justify-center gap-10 rounded-lg duration-200 hover:scale-105 shadow-sm shadow-white">
                        <img src="/images/whatsapp.svg" alt="" width="100" height="100">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <h3 class="text-xl font-bold">Via Whatsapp</h3>
                        </div>
                    </a>
                    {{-- Llamada --}}
                    <a href="tel:0991821434"
                        class="w-56 h-56 bg-white flex flex-col items-center justify-center gap-10 rounded-lg duration-200 hover:scale-105 shadow-sm shadow-white">
                        <img src="/images/llamada.png" alt="" width="95" height="100">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <h3 class="text-xl font-bold">Llamada directa</h3>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Seccion para el formulario de contacto --}}
            <div class="py-10 px-3 sm:px-20 flex flex-col items-center gap-10">
                <div class="border w-full p-10 lg:p-20 bg-white shadow-xl rounded-md">
                    <h2 class="text-2xl sm:text-4xl font-black text-center">O también puedes hacernos conocer tus inquietudes:</h2>
                    {{-- Formulario de contacto --}}
                    <div class="w-full p-4 lg:p-10">
                        <form id="sendInteraction" method="POST">
                            @csrf
                            <div>
                                <label for="nombres_c" class="text-lg sm:text-sm">Nombres <strong class="text-red-600">*</strong> :</label>
                                <input type="text" id="nombres_c" name="nombres_c"
                                    class="w-full my-5 text-lg sm:text-sm rounded-md outline-1 focus:ring-2 focus:shadow-rgba-blue-sky-200 border-0 bg-rgba-blue-sky-200 bg-opacity-10">
                            </div>
                            <div>
                                <label for="telefono_c" class="text-lg sm:text-sm">Telefono <strong class="text-red-600">*</strong> :</label>
                                <input type="tel" name="telefono_c" id="telefono_c"
                                    class="w-full my-5 text-lg sm:text-sm rounded-md outline-1 focus:ring-2 focus:shadow-rgba-blue-sky-200 border-0 bg-rgba-blue-sky-200 bg-opacity-10">
                            </div>
                            <div>
                                <label for="" class="text-lg sm:text-sm">Asunto <strong class="text-red-600">*</strong> :</label>
                                <br>
                                <select name="asunto_c" id="asunto_c"
                                    class="my-5 w-full text-lg rounded-md outline-1 focus:ring-2 focus:shadow-rgba-blue-sky-200 border-0 bg-rgba-blue-sky-200 bg-opacity-10">
                                    <option selected disabled class="text-xs">Asunto a tratar...</option>
                                    <option value="Información General" class="text-xs">Información General</option>
                                    <option value="Servicios" class="text-xs">Servicios</option>
                                </select>
                            </div>
                            <div>
                                <label for="mensaje_c" class="text-lg sm:text-sm">Mensaje <strong class="text-red-600">*</strong> :</label>
                                <textarea name="mensaje_c" id="mensaje_c" cols="30" rows="10"
                                    class="w-full my-5 text-sm rounded-md outline-1 focus:ring-2 focus:shadow-rgba-blue-sky-200 border-0 bg-rgba-blue-sky-200 bg-opacity-10"></textarea>
                            </div>
                            <div class="relative w-full flex justify-end items-center h-20">
                                <button type="submit"
                                    class="enviarAsunto bg-rgba-blue-sky-200 text-white  w-48 h-12 text-center rounded-md active:transform active:translate-y-1 transition-all hover:ring">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <article class="flex flex-col sm:flex-row items-center justify-around mt-10 border-t border-black py-28">
                <aside class="p-5">
                    <h2 class="text-2xl">
                        <b>Si tienes mas preguntas no dudes en visitarnos:</b>
                    </h2>
                    <p class="mt-5 text-base">
                        Estamos ubicados por la calle Eugenio Espejo e3-38
                    </p>
                    <p class="mt-5 text-base">
                        Localidad de <strong>Amaguaña</strong>
                    </p>
                    <a href="https://www.google.com/maps/dir/Mecanica+Automotriz+tipan/AUTOMOTRIZ+%22AMAGUA%C3%91A%22/@-0.3803704,-78.506431,18z/data=!4m13!4m12!1m5!1m1!1s0x91d5a5c359e8bb17:0xbba73c7d020a2c15!2m2!1d-78.5066128!2d-0.3808944!1m5!1m1!1s0x91d5a5850d4380f5:0x960602f2e4c579d7!2m2!1d-78.5036942!2d-0.3791817?entry=ttu"
                        target="_blank" rel="noreferrer"
                        class="inline-flex items-center p-4 bg-rgba-blue-sky-200  text-white rounded-md hover:bg-rgba-blue-sky-200
 text-sm active:transform active:translate-y-1 transition-all hover:ring cursor-pointer mt-5">
                        <b class="text-md">Como LLegar</b>
                    </a>
                </aside>

                <div class="grid place-content-center p-5 shadow-2xl">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d2513.372510128527!2d-78.5072796749955!3d-0.3811122025286861!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x91d5a5c359e8bb17%3A0xbba73c7d020a2c15!2sMecanica%20Automotriz%20tipan%2C%20Eugenio%20Espejo%2C%20Amagua%C3%B1a!3m2!1d-0.38089419999999996!2d-78.5066126!5e0!3m2!1ses-419!2sec!4v1704675367021!5m2!1ses-419!2sec"
                         height="450" style="border:0;" allowfullscreen="" loading="lazy" class="w-[350px] sm:w-[600px]"
                        referrerPolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </article>
        </div>
        <x-footer />
    </section>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        $('#sendInteraction').on('submit', function(e) {
            e.preventDefault();

            let nombre = $('#nombres_c').val()
            let telefono = $('#telefono_c').val()
            let asunto = $('#asunto_c').val()
            let mensaje = $('#mensaje_c').val()

            $.ajax({
                method: 'POST',
                url: "{{ route('peticion.peticionAsunto') }}",
                data: {
                    nombre_c: nombre,
                    telefono_c: telefono,
                    asunto_c: asunto,
                    mensaje_c: mensaje
                },
                success: function(response) {
                    if (response.status === 'success') {
                        Command: toastr["success"]("Petición realizada con éxito!", "Notificación")
                    }

                    $('#nombres_c').val('')
                    $('#telefono_c').val('')
                    $('#asunto_c').val('')
                    $('#mensaje_c').val('')
                }
            })
        })
    </script>

</x-app-layout>
