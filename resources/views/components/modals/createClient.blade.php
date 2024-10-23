<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900">
                    Agregar cliente al sistema
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-4">
                <form class="space-y-4" action="{{ route('cliente.store') }}" method="POST">
                    @csrf
                    <div class="flex items-center w-auto gap-5">
                        <div>
                            <label for="id"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Identificación</label>
                            <input type="text" name="id" id="id"
                                placeholder="Identificacion del cliente..."
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5">

                        </div>
                        <div>
                            <label for="Nombre" class="block mb-2 text-sm font-medium text-gray-900 ">Nombres</label>
                            <input type="text" name="Nombre" id="Nombre"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5"
                                placeholder="Nombre del cliente..." />
                        </div>
                    </div>
                    <div>
                        <label for="Correo" class="block mb-2 text-sm font-medium text-gray-900 ">Correo</label>
                        <input type="email" name="Correo" id="Correo"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="cliente@gmail.com" />
                    </div>
                    <div>
                        <label for="Direccion" class="block mb-2 text-sm font-medium text-gray-900 ">Direccion</label>
                        <input type="text" name="Direccion" id="Direccion"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Dirección del cliente..." />
                    </div>
                    <div>
                        <label for="Telefono" class="block mb-2 text-sm font-medium text-gray-900 ">Telefono</label>
                        <input type="text" name="Telefono" id="Telefono"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Telefóno del cliente..." />
                    </div>
                    <div class="flex w-full items-center gap-5 p-5">
                        <button type="submit"
                            class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Agregar cliente
                        </button>
                        <button data-modal-hide="authentication-modal" type="button"
                            class="w-full text-black bg-gray-300 hover:bg-gray-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
