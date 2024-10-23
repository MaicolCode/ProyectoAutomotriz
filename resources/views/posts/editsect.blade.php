<x-app-layout>
    <x-navs.navigation option="hidden" />
    <x-slot name="header">
        <x-header />
    </x-slot>

    <x-slot name="title">
        Edición de Posts AMT
    </x-slot>
    <div class="mx-3 my-3">
        <div class=" h-32 flex items-center px-16 bg-rgba-blue-sky-200 bg-opacity-50">
            <h1 class="text-2xl text-white">Edición de datos para el blog...</h1>
        </div>
        <div class="border border-gray-300 h-auto mt-2">
            <section class="relative">
                <div class="px-16 mt-16">
                    <h2 class="text-2xl font-semibold">Encabezado del Blog</h2>
                    <hr>
                    <form method="POST" action="{{ route('sections.update', $sections) }}">
                        @csrf
                        @method('patch')
                        <div class="flex gap-5 items-center">
                            <div class="w-full">
                                <div class="flex items-center mt-10">
                                    <label class="font-bold w-44" for="post_id">ID del Blog: </label>
                                    <div class="w-full mx-5">
                                        <input type="text" name="post_id" id="post_id"
                                            placeholder="Inserta el ID de tu blog aquí..."
                                            @if ($errors->get('post_id')) class="
                                        border-2 text-xs w-2/4 border-red-500  placeholder-red-500"
                                        @else
                                        class="
                                             border-1 text-xs w-2/4 border-gray-300 dark:placeholder-gray-400" @endif
                                            value="{{ $sections->post_id }}" value="{{ old('id') }}">
                                        @error('post_id')
                                            <div class="flex gap-2 mt-2">
                                                <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                                <label class="text-xs text-red-500">{{ $message }}</label>
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="flex items-center mt-5">
                                    <label class="font-bold w-44" for="subtitle">Subtitulo de la Seccion: </label>
                                    <div class="w-full mx-5">
                                        <input type="text" name="subtitle" id="subtitle"
                                            placeholder="Inserta el nombre de tu blog aquí..."
                                            @if ($errors->get('subtitle')) class="
                                        border-2 text-xs w-2/4 border-red-500  placeholder-red-500"
                                        @else
                                        class="
                                             border-1 text-xs w-2/4 border-gray-300 dark:placeholder-gray-400" @endif
                                            value="{{ $sections->subtitle }}" value="{{ old('title') }}">
                                        @error('subtitle')
                                            <div class="flex gap-2 mt-2">
                                                <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                                <label class="text-xs text-red-500">{{ $message }}</label>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <label class="font-bold w-44" for="images">Imagen del Blog: </label>
                                    <div class="w-full mx-5">
                                        <input type="text" name="images" id="images"
                                            placeholder="Inserta la url de la imagen de tu blog aquí..."
                                            @if ($errors->get('images')) class="
                                        border-2 text-xs w-2/4 border-red-500  placeholder-red-500"
                                        @else
                                        class="
                                             border-1 text-xs w-2/4 border-gray-300 dark:placeholder-gray-400" @endif
                                            value="{{ $sections->images }}" value="{{ old('image') }}">
                                        @error('images')
                                            <div class="flex gap-2 mt-2">
                                                <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                                <label class="text-xs text-red-500">{{ $message }}</label>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="w-3/6 h-auto py-10 px-2 flex items-center rounded-2 "> 
                                <img src="{{ $sections->images }}" alt="{{ $sections->subtitle }}">
                            </div>
                        </div>
                        <div class="flex">
                            <label class="font-bold w-40" for="content">Contenido: </label>
                            <div class="w-full mx-3">
                                <textarea name="content" id="content" rows="10"
                                    @if ($errors->get('content')) class="
                                border-2 text-xs w-1/4 border-red-500  placeholder-red-500"
                                @else
                                class=" ckeditor
                                     border-1 text-xs w-1/4 border-gray-300 dark:placeholder-gray-400" @endif
                                    placeholder="Inserta la descripcion de tu post aquí..." style="width: 600px">{{ $sections->content }}</textarea>
                                @error('content')
                                    <div class="flex gap-2 mt-2">
                                        <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                        <label class="text-xs text-red-500">{{ $message }}</label>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-end m-8">
                            <button data-modal-target="popup-modal-question" data-modal-toggle="popup-modal-question"
                                type="button"
                                class="inline-flex items-center px-5 py-3 bg-rgba-blue-sky-100 text-white hover:bg-rgba-blue-sky-200
                                    text-xs active:transform active:translate-y-1 transition-all hover:ring cursor-pointer">
                                Editar
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                            <x-modals.modalQuestion message="¿Estas seguro de editar esta sección?" />
                        </div>
                    </form>
                </div>
                <a href="{{ route('sections.index', $sections->post_id) }}"
                    class="inline-flex absolute top-0 right-0 mr-16 mt-2 items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Regresar
                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </section>

        </div>
    </div>



</x-app-layout>
