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
        <h1 class="text-2xl font-bold inline border-l-2 border-rgba-blue-sky-200 p-3">Listado de posts.</h1>
        <div class="relative w-full h-20 flex items-center"> 
            <a href="{{ route('posts.create') }}" class="flex items-center text-sm absolute right-0 py-3 px-2 border my-20 rounded-lg bg-green-400 text-black">
                <b>Agregar Post</b><ion-icon name="add-sharp" class="w-4 h-4 mx-2"></ion-icon>
            </a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-300">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-5 w-32">
                            Post ID
                        </th>
                        <th scope="col" class="px-6 py-5 w-44">
                            Titulo Post
                        </th>
                        <th scope="col" class="px-6 py-5 w-1/3">
                            Descripcion Post
                        </th>
                        <th scope="col" class="px-6 py-5 auto">
                            Fecha de Creación
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="odd:bg-white odd:dark:bg-gray-500 odd:text-white even:bg-gray-50 border-b even:text-black">
                            <th scope="row"
                                class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $post->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $post->title }}
                            </td>
                            <td class="px-6 py-4  text-xs">
                                {{ $post->description }}
                            </td>
                            <td class="px-6 py-4  text-xs">
                                {{ $post->created_at }}
                            </td>
                            <td class="px-6 py-4 flex gap-4 justify-center w-full">
                                <div class="flex gap-5 justify-center">
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button data-modal-target="popup-modal-{{ $post->id }}"
                                            data-modal-toggle="popup-modal-{{ $post->id }}" type="button">
                                            <ion-icon name="trash-outline"
                                                class="hover:text-red-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                        </button>
                                        <x-modals.modalWarn
                                            message='¿Estas seguro de eliminar la cotiza con la ID: {{ $post->id }} ?'
                                            id="{{ $post->id }}" />
                                    </form>
                                    <a href="{{ route('posts.edit', $post->id) }}">
                                        <ion-icon name="create-outline"
                                            class="hover:text-yellow-400 duration-500 transition-all w-4 h-4"></ion-icon>
                                    </a>
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        <ion-icon name="eye-outline" 
                                        class="hover:text-blue-400 duration-500 transition-all w-4 h-4"></ion-icon>
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
                    {{ $posts->links() }}
                </div>
            </div>
        </div>   
    </div>
</x-app-layout>
