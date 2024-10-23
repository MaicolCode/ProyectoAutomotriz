<x-app-layout>
    <x-navs.navigation option="hidden"/>
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
                    <form method="POST" action="{{ route('posts.update', $posts) }}">
                        @csrf
                        @method('patch')
                        <div class="flex items-center mt-10">
                            <label class="font-bold w-44" for="id">ID del Blog: </label>
                            <div class="w-full">
                                <input type="text" name="id" id="id" 
                                    placeholder="Inserta el ID de tu blog aquí..."
                                    @if ($errors->get('id')) class="
                                border-2 text-xs w-1/4 border-red-500  placeholder-red-500"
                                @else
                                class="
                                     border-1 text-xs w-1/4 border-gray-300 dark:placeholder-gray-400" @endif
                                     value="{{ $posts->id }}"
                                     value="{{ old('id') }}">
                                @error('id')
                                    <div class="flex gap-2 mt-2">
                                        <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                        <label class="text-xs text-red-500">{{ $message }}</label>
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="flex items-center mt-5">
                            <label class="font-bold w-44" for="title">Titulo del Blog: </label>
                            <div class="w-full">
                                <input type="text" name="title" id="title"
                                    placeholder="Inserta el nombre de tu blog aquí..."
                                    @if ($errors->get('title')) class="
                                border-2 text-xs w-1/4 border-red-500  placeholder-red-500"
                                @else
                                class="
                                     border-1 text-xs w-1/4 border-gray-300 dark:placeholder-gray-400" @endif
                                     value="{{ $posts->title }}"
                                     value="{{ old('title') }}">
                                @error('title')
                                    <div class="flex gap-2 mt-2">
                                        <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                        <label class="text-xs text-red-500">{{ $message }}</label>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="flex items-center mt-5">
                            <label class="font-bold w-40" for="image">Imagen del Blog: </label>
                            <div class="w-full mx-3">
                                <input type="text" name="image" id="image"
                                    placeholder="Inserta la url de la imagen de tu blog aquí..."
                                    @if ($errors->get('image')) class="
                                border-2 text-xs w-1/4 border-red-500  placeholder-red-500"
                                @else
                                class="
                                     border-1 text-xs w-1/4 border-gray-300 dark:placeholder-gray-400" @endif
                                     value="{{ $posts->image }}"
                                     value="{{ old('image') }}">
                                @error('image')
                                    <div class="flex gap-2 mt-2">
                                        <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                        <label class="text-xs text-red-500">{{ $message }}</label>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mt-5">
                            <label class="font-bold w-40" for="description">Descripción: </label>
                            <div class="w-full mx-3">
                                <textarea name="description" id="description" rows="10"
                                @if ($errors->get('image')) class="
                                border-2 text-xs w-1/4 border-red-500  placeholder-red-500"
                                @else
                                class="
                                     border-1 text-xs w-1/4 border-gray-300 dark:placeholder-gray-400" @endif
                                    placeholder="Inserta la descripcion de tu post aquí..." style="width: 600px">{{ $posts->description }}</textarea>
                                @error('description')
                                    <div class="flex gap-2 mt-2">
                                        <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                        <label class="text-xs text-red-500">{{ $message }}</label>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-end m-8">
                            <button data-modal-target="popup-modal-question" data-modal-toggle="popup-modal-question" type="button"
                                class="inline-flex items-center px-5 py-3 bg-rgba-blue-sky-100 text-white hover:bg-rgba-blue-sky-200
                                    text-xs active:transform active:translate-y-1 transition-all hover:ring cursor-pointer">
                                    Siguiente
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                            <x-modals.modalQuestion message="¿Estas seguro de editar este blog?"/>
                        </div>
                    </form>
                </div>
                <a href="{{ route('ListPost') }}"
                    class="inline-flex absolute top-0 right-0 mr-16 mt-2 items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Salir
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