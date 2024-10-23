<x-app-layout>
    <x-navs.navigation option="hidden" />
    <x-slot name="header">
        <x-header />
    </x-slot>

    <x-slot name="title">
        Creación de Secciones AMT
    </x-slot>
    <div class="mx-2 my-3">
        @if($errors->any())
        @foreach ($errors->all() as $error )
            @php
                toastr()->error($error, "Notificación.");
            @endphp
        @endforeach
        @endif
        <div class=" h-32 flex items-center px-16 bg-rgba-blue-sky-200 bg-opacity-50">
            <h1 class="text-2xl text-white">Ingreso de datos para cuerpo del blog...</h1>
        </div>
        <div class="border border-gray-300 h-auto mt-2">
            <section class="relative">
                <div class="px-10 mt-16">
                    <h2 class="text-2xl font-semibold">Cuerpo del Blog</h2>
                    <hr>
                    <h3 class="text-xl mt-10">Edita o Crea las secciones de tu post aquí!</h3>
                    {{-- Seccion lista de secciones publicados --}}
                    <div class="my-5">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Post ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Subtitulo
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Contenido
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sections as $section)
                                        <tr
                                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 ">
                                            <th scope="row"
                                                class="px-6 py-4 text-xs font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $section->id }}
                                            </th>
                                            <td class="px-6 py-4 text-xs w-1/3">
                                                {{ $section->subtitle }}
                                            </td>
                                            <td class="px-6 py-4 text-xs w-3/4">
                                                {{ $section->content }}
                                            </td>
                                            <td class="px-6 py-4 flex gap-4 justify-center">
                                                <form action="{{ route('sections.destroy', $section, $post) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">
                                                        <ion-icon name="trash-outline"
                                                            class="hover:text-red-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                                    </button>
                                                </form>
                                                <a href="{{ route('sections.edit',$section->id) }}">
                                                    <ion-icon name="create-outline"
                                                        class="hover:text-yellow-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                                </a>
                                                <a href="{{ route('posts.show', $post->id) }}">
                                                    <ion-icon name="eye-outline"
                                                        class="hover:text-blue-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td colspan="3" class="py-4 text-end font-bold">Agregar un nueva Sección:
                                        </td>
                                        <td class="px-6 py-4">
                                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                                type="button" class=" rounded-full">
                                                <ion-icon name="add-circle-outline"
                                                    class="w-10 h-10 hover:text-cyan-100 duration-500 transition-all"></ion-icon>
                                            </button>
                                        </td>
                                    </tr>
                                    <x-modals.modalSection />
                                </tbody>
                            </table>
                        </div>
                        @if (isset($sections[0]))
                            <div class="relative w-full h-20">
                                <form action="{{ route('ListPost') }}" method="GET">
                                    <button data-modal-target="popup-modal-question" data-modal-toggle="popup-modal-question"
                                        type="button"
                                        class="absolute right-0 bottom-0 inline-flex items-center px-5 py-3 bg-rgba-blue-sky-100 text-white hover:bg-rgba-blue-sky-200
                                    text-xs active:transform active:translate-y-1 transition-all hover:ring cursor-pointer">
                                        Hecho
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </button>
                                    <x-modals.modalQuestion message="¿Creaste todo? ¿Estas seguro realizar esta acción?" />
                                </form>

                            </div>
                        @endif
                    </div>
                    
            </section>

        </div>
    </div>

</x-app-layout>
