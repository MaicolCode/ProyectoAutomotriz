<x-app-layout>
    <x-navs.navigation />
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-slot name="title">
        Posts AMT
    </x-slot>
    {{-- Seccion lista de posts publicados --}}
    <div class="mx-4 my-4">
        @if($errors->any())
        @foreach ($errors->all() as $error )
            @php
                toastr()->error($error, "Notificación.");
            @endphp
        @endforeach
        @endif
        <h1 class="text-2xl font-bold inline border-l-2 border-rgba-blue-sky-200 p-3">Listado de clientes.</h1>
        <div class="relative w-full h-20 flex items-center">
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                class="flex items-center text-sm absolute right-0 py-3 px-2 border my-20 rounded-lg bg-green-400 text-black">
                <b>Agregar Cliente</b><ion-icon name="add-sharp" class="w-4 h-4 mx-2"></ion-icon>
            </button>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-300">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-5 w-1/6">
                            Cedula
                        </th>
                        <th scope="col" class="px-6 py-5 w-1/5">
                            Nombres
                        </th>
                        <th scope="col" class="px-6 py-5 w-1/5">
                            Direccion
                        </th>
                        <th scope="col" class="px-6 py-5 w-1/6">
                            Correo / Telefono
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-500 odd:text-white even:bg-gray-50 border-b even:text-black">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $cliente->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $cliente->Nombre }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $cliente->Direccion }}
                            </td>
                            <td class="px-6 py-4">
                                <p>{{ $cliente->Correo }}</p>
                                <p>{{ $cliente->Telefono }}</p>
                            </td>
                            <td>
                                <div class="flex gap-5 justify-center">
                                    <form action="{{ route('cliente.destroy', $cliente) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button data-modal-target="popup-modal-{{ $cliente->id }}"
                                            data-modal-toggle="popup-modal-{{ $cliente->id }}" type="button">
                                            <ion-icon name="trash-outline"
                                                class="hover:text-red-600 duration-500 transition-all w-4 h-4"></ion-icon>
                                        </button>
                                        <x-modals.modalWarn
                                            message='¿Estas seguro de eliminar al cliente con identificación: {{ $cliente->id }} ?'
                                            id="{{ $cliente->id }}" />
                                    </form>
                                    <button data-modal-target="authentication-modal-client-edit-{{ $cliente->id }}" data-modal-toggle="authentication-modal-client-edit-{{ $cliente->id }}" type="button">
                                        <ion-icon name="create-outline"
                                            class="hover:text-yellow-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                    </button>

                                    <x-modals.editClient cliente="{{ $cliente->id }}" nombre="{{ $cliente->Nombre }}" correo="{{ $cliente->Correo }}" direccion="{{ $cliente->Direccion }}" telefono="{{ $cliente->Telefono }}"/>

                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- Paginación generada automaticamente por Flowbite UI --}}
            <div class="w-full h-20 mt-10 flex justify-end">
                <div class="w-2/6 h-full mr-10">
                    {{ $clientes->links() }}
                </div>
            </div>
        </div>
        <x-modals.createClient />
    </div>
</x-app-layout>
