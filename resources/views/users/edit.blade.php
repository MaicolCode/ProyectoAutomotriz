<x-app-layout>
    <x-navs.navigation />
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-slot name="title">
        Edicion de Usuarios AMT
    </x-slot>
    <div class="p-20">
        <div class="cardheader text-center">
            <h1 class="text-2xl">Editar Usuario</h1>
        </div>
        <div class="cardBody mt-9">
            <form class="max-w-md mx-auto" method="POST" action="{{ route('users.update', $user) }}">
                @csrf
                @method('PATCH')
                <div class="w-full h-auto p-12 border-2">
                    <div class="flex flex-col mt-2">
                        <label class="font-bold w-44" for="name">Usuario: </label>
                        <div class="w-full">
                            <input type="text" name="name" id="name"
                                placeholder="Inserta el nombre de usuario..." value="{{ $user->name }}"
                                @if ($errors->get('name')) class="
                            border-2 text-xs w-full border-red-500  placeholder-red-500"
                            @else
                            class="
                                 border-1 text-xs w-full border-gray-300 dark:placeholder-gray-400" @endif
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="flex gap-2 mt-2">
                                    <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                    <label class="text-xs text-red-500">{{ $message }}</label>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label class="font-bold w-44" for="email">Correo: </label>
                        <div class="w-full">
                            <input type="email" name="email" id="email" placeholder="Inserta el email..."
                                value="{{ $user->email }}"
                                @if ($errors->get('email')) class="
                            border-2 text-xs w-full border-red-500  placeholder-red-500"
                            @else
                            class="
                                 border-1 text-xs w-full border-gray-300 dark:placeholder-gray-400" @endif
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="flex gap-2 mt-2">
                                    <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                    <label class="text-xs text-red-500">{{ $message }}</label>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label class="font-bold w-44" for="user_type">Tipo de usuario: </label>
                        <div class="w-full">
                            <input type="text" name="user_type" id="user_type" placeholder="Agregar tipo de usuario"
                                value="{{ $user->user_type }}"
                                @if ($errors->get('email')) class="
                            border-2 text-xs w-full border-red-500  placeholder-red-500"
                            @else
                            class="
                                 border-1 text-xs w-full border-gray-300 dark:placeholder-gray-400" @endif
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="flex gap-2 mt-2">
                                    <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                    <label class="text-xs text-red-500">{{ $message }}</label>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label class="font-bold w-44" for="password">Contraseña: </label>
                        <div class="w-full">
                            <input type="password" name="password" id="password" placeholder="Inserta la contraseña..."
                                @if ($errors->get('password')) class="
                            border-2 text-xs w-full border-red-500  placeholder-red-500"
                            @else
                            class="
                                 border-1 text-xs w-full border-gray-300 dark:placeholder-gray-400" @endif
                                value="{{ old('password') }}">
                            @error('password')
                                <div class="flex gap-2 mt-2">
                                    <ion-icon name="alert-circle-outline" class="text-red-500"></ion-icon>
                                    <label class="text-xs text-red-500">{{ $message }}</label>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-start mt-4">
                        <button type="submit"
                            class="inline-flex items-center px-5 py-3 bg-rgba-blue-sky-100 text-white hover:bg-rgba-blue-sky-200
                                text-xs active:transform active:translate-y-1 transition-all hover:ring cursor-pointer">
                            Editar
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <a href="{{ route('users.index') }}"
            class="inline-flex absolute top-0 right-0 mr-10 mt-52 items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
            Regresar
            <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>

</x-app-layout>
