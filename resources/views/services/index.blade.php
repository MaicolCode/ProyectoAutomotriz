<x-app-layout>
    <div>
        <x-navs.navigation />
    </div>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-slot name="title">
        Servicios
    </x-slot>


    <div class="py-4 mx-4">
        <h1 class="text-2xl font-bold inline border-l-2 border-rgba-blue-sky-200 p-3">Listado de servicios.</h1>
        <div class="relative w-full h-20 flex items-center">
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                class="flex items-center text-sm absolute right-0 py-3 px-2 border my-20 rounded-lg bg-green-400 text-black">
                <b>Agregar Servicio</b><ion-icon name="add-sharp" class="w-4 h-4 mx-2"></ion-icon>
            </button>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-300">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-5">
                            #
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Servicio
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Precio
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Fecha de Creación
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $key => $service)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-500 odd:text-white even:bg-gray-50 border-b even:text-black">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $key + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $service->se_nombre }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $service->se_precio }} $
                            </td>
                            <td class="px-6 py-4">
                                {{ $service->created_at }}
                            </td>
                            <td>
                                <div class="flex gap-5 justify-center">
                                    <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button data-modal-target="popup-modal-{{ $service->id }}"
                                            data-modal-toggle="popup-modal-{{ $service->id }}" type="button">
                                            <ion-icon name="trash-outline"
                                                class="hover:text-red-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                        </button>
                                        <x-modals.modalWarn
                                            message='¿Estas seguro de eliminar la cotiza con la ID: {{ $service->id }} ?'
                                            id="{{ $service->id }}" />
                                    </form>
                                    <button data-modal-target="authentication-modal-service-edit-{{ $service->id }}"
                                        data-modal-toggle="authentication-modal-service-edit-{{ $service->id }}"
                                        type="button">
                                        <ion-icon name="create-outline"
                                            class="hover:text-yellow-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                    </button>
                                    <x-modals.editService service="{{ $service->id }}" nombre="{{ $service->se_nombre }}" descripcion="{{ $service->se_descripcion }}" precio="{{ $service->se_precio }}" image="{{ $service->se_image }}"/>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Paginación generada automaticamente por Flowbite UI --}}
            <div class="w-full h-20 mt-10 flex justify-end">
                <div class="w-2/6 h-full mr-10">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
        <x-modals.createService />
    </div>
</x-app-layout>
