<x-app-layout>

    @if (isset($posts))
        <x-slot name="title">
            Post - {{ $posts->title }}
        </x-slot>
    @else
        <x-slot name="title">
            Editar Comentario
        </x-slot>
    @endif
    <x-navs.navigationV
        classes="p-2 sticky w-full top-0 flex justify-between bg-white text-black 
    text-xs items-center z-30"
        stylesLink='py-3 ml-4 text-slate-400 hover:text-gray-900 duration-200 hover:transform 
    hover:translate-y-0.5 dark:hover:text-black 
    inline-flex items-center px-1 pt-1 hover:border-b-2 hover:border-indigo-400 leading-1 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-200 ease-in-out' />

    <section class="relative min-h-screen">

        {{-- Encabezado del blog --}}

        @if (isset($posts))
            <div class="text-slate-800">
                <div class="fixed right-0 z-20 my-2 mx-5">
                    <div class="rounded-md shadow-sm ">
                        <a href="#comments" aria-current="page"
                            class="flex items-center duration-200 hover:transition-all hover:ease-linear ease-linear hover:scale-105 px-4 py-2 text-xs font-medium bg-white rounded-s-lg hover:bg-gray-100 focus:z-10 dark:bg-rgba-blue-sky-200 dark:border-rgba-blue-sky-600 dark:text-white dark:hover:text-white dark:hover:bg-rgba-blue-sky-100">
                            Comentarios
                            <ion-icon name="chatbubbles-outline" class="ml-2 w-5 h-5" ></ion-icon>
                        </a>
                        
                    </div>
                </div>
                <div class="relative w-full h-96 lg:w-full lg:h-2/4 md:w-2/4">
                    <img src="{{ $posts->image }}" alt="{{ $posts->title }}" class=" w-full h-full -z-0 opacity-100">
                    <b
                        class="absolute bottom-0 mb-20 pl-28 text-5xl overflow-hidden lg:text-6xl md:text-3xl z-10 text-white w-96 lg:w-3/4 bg-slate-700 bg-opacity-50">{{ $posts->title }}</b>
                </div>
                <div class="p-20">
                    <div class="p-12">
                        <h2 class="text-center text-4xl font-bold mb-5">Descripción</h2>
                        <hr>
                        <p class="mt-10 text-xl">
                            {{ $posts->description }}
                        </p>
                    </div>
                </div>
            </div>
        @endif


        {{-- Secciones del blog --}}

        @if (isset($sections))
            <div class="flex justify-center">
                @foreach ($sections as $section)                 
                    <div class="prose lg:prose-xl mt-10">{!! $section->content !!}</div>
                @endforeach
            </div>
        @endif



        {{-- Sección de comentarios --}}

        <div class="p-12" id="comments">
            <h1 class="text-2xl">¿Qué te parecio el contenido?</h1>
            <hr>
            @if ($state == 'Insertable')
                <form method="POST" action="{{ route('comments.store') }}" class="relative mt-5">
                    @csrf
                    <input type="text" name="post_id" value="{{ $posts->id }}" class="hidden">
                    <textarea name="message" rows="5" placeholder="{{ __('Inserta tu comentario aquí...') }}"
                        class="text-sm block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}</textarea>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <div class="h-20">
                        <x-primary-button class="mt-4 absolute right-0"><ion-icon name="send-outline"
                                class="w-4 h-4"></ion-icon></x-primary-button>
                    </div>
                </form>
            @else
                <a href="{{ route('posts.show', $post) }}"
                    class="inline-flex absolute top-0 right-0 mr-16 mt-2 items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Regresar
                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <form method="POST" action="{{ route('comments.update', $chirp) }}" class="relative mt-5">
                    @csrf
                    @method('patch')
                    <input type="text" name="post_id" value="{{ $post }}" class="hidden">
                    <textarea name="message" rows="5" placeholder="{{ __('Inserta tu comentario aquí...') }}"
                        class="text-sm block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ $chirp->message }}</textarea>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <div class="h-20">
                        <x-primary-button class="mt-4 absolute right-0">
                            Editar
                        </x-primary-button>
                    </div>
                </form>
            @endif
            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                @if (isset($comments))
                    @foreach ($comments as $chirp)
                        <div class="p-4 flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <div class="flex-1">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-gray-800 text-sm">{{ $chirp->user->name }}</span>
                                        <small
                                            class="ml-2 text-sm text-gray-600">{{ $chirp->created_at->format('j M Y') }}</small>
                                        @unless ($chirp->created_at->eq($chirp->updated_at))
                                            <small class="text-sm text-gray-600"> &middot; {{ __('editado...') }}</small>
                                        @endunless
                                    </div>

                                    @if ($chirp->user->is(auth()->user()))
                                        <x-dropdown>
                                            <x-slot name="trigger">
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                            </x-slot>
                                            <x-slot name="content">
                                                <x-dropdown-link :href="route('comments.edit', $chirp)">
                                                    {{ __('Editar') }}
                                                </x-dropdown-link>
                                                <form method="POST" action="{{ route('comments.destroy', $chirp) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <x-dropdown-link :href="route('comments.destroy', $chirp)"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        {{ __('Eliminar') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </x-slot>
                                        </x-dropdown>
                                    @endif
                                </div>
                                <p class="mt-4 text-gray-900 text-sm">{{ $chirp->message }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
        <x-footer />
    </section>

</x-app-layout>
