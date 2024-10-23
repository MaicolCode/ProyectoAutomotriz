<x-app-layout>

    <x-navs.navigationV
        classes="p-2 fixed w-full top-0 flex justify-between  bg-white text-black 
    text-xs items-center z-30 shadow-md"
        stylesLink=" py-3 ml-4 text-slate-500 hover:text-slate-900 hover:font-bold duration-300 hover:transform hover:translate-y-0.5 
    inline-flex items-center px-1 pt-1 hover:border-b-2 hover:border-rgba-blue-sky-200 leading-1 focus:outline-none focus:border-rgba-blue-sky-100 transition duration-200 ease-in-out" />

    <x-slot name="title">
        Informacion Servicios
    </x-slot>

    <section class="h-full grid ">
        <div class="w-full h-auto">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    @php
                        toastr()->error($error, 'Notificación.');
                    @endphp
                @endforeach
            @endif
            {{-- Seccion del header de la pagina de servicios --}}
            <div class="mt-28 flex mb-7 text-slate-800">
                <h1
                    class="font-bold w-4/6 text-3xl text-white tracking-widest border-b-2 px-5 py-20 bg-rgba-blue-sky-200 rounded-r-lg">
                    SERVICIOS MECÁNICA AUTOMOTRIZ TIPAN

                </h1>
                <p class="p-5 w-2/5 text-sm flex flex-col justify-center">En esta sección encontraras la información del
                    servicio seleccionado...</p>
            </div>
            {{-- Seccion del body de la pagina de servicios --}}
            <div class="grid grid-cols-1 md:grid-cols-2 my-10 p-2">
                {{-- Información del servicio seleccionado --}}
                <div class="p-5 text-slate-800  border border-slate-400 rounded-md">

                    <h1 class="text-2xl font-bold my-5">
                        {{ $servicio->se_nombre }}
                    </h1>
                    <div class="prose mt-10">
                        {!! $servicio->se_descripcion !!}
                    </div>
                    <p class="my-10 text-lg border-b-2 border-b-red-500 inline-block">
                        El valor total del servicio es de: <strong>{{ $servicio->se_precio }} $</strong>
                    </p>
                </div>
                {{-- Formulario para el registro de la persona que deseea cotizar el servicio --}}
                <div class="p-5 text-slate-800 rounded-md bg-slate-400 bg-opacity-5">
                    <h1 class="text-2xl text-center font-bold py-5 my-10 border-b-2 border-b-slate-800">
                        Ingreso de datos para la cotización
                    </h1>
                    <form action="{{ route('peticionCotiza.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center w-auto gap-5">
                            <div>
                                <label for="Cedula" class="block mb-2 text-sm font-medium text-gray-900 "><strong
                                        class="text-red-500 mr-1">*</strong>Cedula: </label>
                                <input type="text" name="Cedula" id="Cedula"
                                    placeholder="Identificacion del cliente..."
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5"
                                    required>

                            </div>
                            <div>
                                <label for="Nombres" class="block mb-2 text-sm font-medium text-gray-900 "><strong
                                        class="text-red-500 mr-1">*</strong>Nombres: </label>
                                <input type="text" name="Nombres" id="Nombres"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5"
                                    placeholder="Nombre del cliente..." required />
                            </div>
                        </div>
                        <div class="mt-5">
                            <label for="Correo" class="block mb-2 text-sm font-medium text-gray-900 "><strong
                                    class="text-red-500 mr-1">*</strong>Correo: </label>
                            <input type="email" name="Correo" id="Correo"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="cliente@gmail.com" required />
                        </div>
                        <div class="mt-5">
                            <label for="Direccion" class="block mb-2 text-sm font-medium text-gray-900 "><strong
                                    class="text-red-500 mr-1">*</strong>Direccion: </label>
                            <input type="text" name="Direccion" id="Direccion"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Dirección del cliente..." required />
                        </div>
                        <div class="mt-5">
                            <label for="Telefono" class="block mb-2 text-sm font-medium text-gray-900 "><strong
                                    class="text-red-500 mr-1">*</strong>Telefono: </label>
                            <input type="text" name="Telefono" id="Telefono"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Telefóno del cliente..." required />
                        </div>
                        <div class="mt-5">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 "><strong
                                class="text-red-500 mr-1">*</strong>Selecciona la fecha en la que acudiras a la mécanica:</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker datepicker-autohide type="text" name="dia_selec" id="dia_selec"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                    placeholder="Select date" value="{{ $date->format('l jS \of F Y h:i:s A') }}">
                            </div>

                        </div>

                        {{-- Coleccion de datos a enviar por parte del servicio... --}}
                        <div class="mt-5">
                            <input type="text" name="Servicio" id="Servicio"
                                class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                                value="{{ $servicio->se_nombre }}" />
                        </div>
                        <div class="mt-5">
                            <input type="text" name="Estado" id="Estado"
                                class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                                value="Pendiente" />
                        </div>
                        <div class="mt-5">
                            <input type="number" name="Precio" id="Precio"
                                class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                                value="{{ $servicio->se_precio }}" />
                        </div>
                        <div class="flex w-full justify-center py-14">
                            <button type="button" data-modal-target="popup-modal-question"
                                data-modal-toggle="popup-modal-question"
                                class="w-3/6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center  active:transform active:translate-y-1 transition-all cursor-pointer">
                                Cotizar Servicio
                            </button>
                        </div>
                        <x-modals.modalQuestion message="¿Estas seguro de cotizar este servicio?" />
                    </form>
                </div>
            </div>

        </div>

        {{-- Seccion del footer de la pagina de servicios --}}
        <x-footer />
    </section>
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
</x-app-layout>
