<x-app-layout>
    <x-navs.navigation />
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-slot name="title">
        Usuarios AMT
    </x-slot>
    {{-- Seccion lista de usuarios registrados --}}

    <div class="mx-4 my-4 ">
        <h1 class="text-2xl font-bold inline border-l-2 border-rgba-blue-sky-200 p-3">Listado de usuarios.</h1>
        <div class="relative w-full h-20 flex items-center">
            <a href="{{ route('users.create') }}"
                class="flex items-center text-sm absolute right-0 py-3 px-2 border my-20 rounded-lg bg-green-400 text-black">
                <b>Agregar Usuario</b><ion-icon name="add-sharp" class="w-4 h-4 mx-2"></ion-icon>
            </a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-300">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-5 w-auto text-center">
                            Usuario ID
                        </th>
                        <th scope="col" class="px-6 py-5 w-auto">
                            Nombre de Usuario
                        </th>
                        <th scope="col" class="px-6 py-5 w-auto text-center">
                            Tipo
                        </th>
                        <th scope="col" class="px-6 py-5 w-auto">
                            Correo Electronico
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-500 odd:text-white even:bg-gray-50 border-b even:text-black">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-center">
                                {{ $user->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-4 flex justify-center">
                                @if ($user->user_type != 'admin')
                                    <div class="w-20 bg-blue-600 bg-opacity-60 text-white text-center p-1 rounded-md">
                                        {{ $user->user_type }}
                                    </div>
                                @else
                                    <div class="w-20 bg-green-600 bg-opacity-60 text-white text-center p-1 rounded-md">
                                        {{ $user->user_type }}
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td>
                                <div class="flex gap-5 justify-center">
                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button data-modal-target="popup-modal-{{ $user->id }}"
                                            data-modal-toggle="popup-modal-{{ $user->id }}" type="button">
                                            <ion-icon name="trash-outline"
                                                class="hover:text-red-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                        </button>
                                        <x-modals.modalWarn
                                            message='¿Estas seguro de eliminar al usuario con la ID: {{ $user->id }} ?'
                                            id="{{ $user->id }}" />
                                    </form>
                                    <a href="{{ route('users.edit', $user->id) }}">
                                        <ion-icon name="create-outline"
                                            class="hover:text-yellow-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{-- Paginación generada automaticamente por Flowbite UI --}}
            <div class="w-full h-20 mt-10 flex justify-end">
                <div class="w-2/6 h-full mr-10">
                    {{ $users->links() }}
                </div>
            </div>
        </div>

    </div>


</x-app-layout>
