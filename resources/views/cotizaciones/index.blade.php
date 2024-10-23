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
        <h1 class="text-2xl font-bold inline border-l-2 border-rgba-blue-sky-200 p-3">Listado de cotizaciones.</h1>
        <div class="relative w-full h-20 flex items-center justify-between gap-5 ">
            <a href="{{ route('cotizacion.pdf') }}" target="_blank"
                class="flex justify-center text-sm py-1 px-2 w-16 border my-20 rounded-lg bg-red-400 text-black">
                <img src="/images/pdfIcon.svg" alt="pdfGenerated" width="36" height="36">
            </a>
            <a href="{{ route('cotizacion.create') }}"
                class="flex items-center text-sm py-3 px-2 border my-20 rounded-lg bg-green-400 text-black">
                <b>Generar Cotizacion</b><ion-icon name="add-sharp" class="w-4 h-4 mx-2"></ion-icon>
            </a>            
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-300">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-5">
                            #
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Cliente
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Contacto
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Fecha de Generación
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Subtotal
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            IVA
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cotizaciones as $key=>$cotizacion)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-500 odd:text-white even:bg-gray-50 border-b even:text-black">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $key+1 }}
                            </th>
                            <td class="px-6 py-4 w-40">
                                {{ $cotizacion->Cliente }}
                            </td>
                            <td class="px-6 py-4 flex w-40">
                                {{ $cotizacion->CCorreo }}
                                <br>
                                {{ $cotizacion->CTelefono }}
                            </td>
                            <td class="px-6 py-4 w-40">
                                Generada el {{ $cotizacion->FCreacion }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $cotizacion->Subtotal_C }} $
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $cotizacion->IVA }} $
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $cotizacion->Total }} $
                            </td>

                            <td>
                                <div class="flex gap-5 justify-center">
                                    <form action="{{ route('cotizacion.destroy', $cotizacion) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button data-modal-target="popup-modal-{{ $cotizacion->id }}"
                                            data-modal-toggle="popup-modal-{{ $cotizacion->id }}" type="button">
                                            <ion-icon name="trash-outline"
                                                class="hover:text-red-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                        </button>
                                        <x-modals.modalWarn
                                            message='¿Estas seguro de eliminar la cotiza con la ID: {{ $cotizacion->id }} ?'
                                            id="{{ $cotizacion->id }}"/>
                                    </form>
                                    <a href="{{ route('cotizacion.edit', $cotizacion->id) }}">
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
                    {{ $cotizaciones->links() }}
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
