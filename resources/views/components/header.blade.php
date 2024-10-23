<div class="relative flex items-center">
    <div class="flex items-center">
        <ion-icon name="logo-web-component" class="text-white w-10 h-10 mx-2"></ion-icon>
        <h2 class="font-semibold text-2xl text-gray-200 leading-tight">
            {{ __('Sistema de gestión Automotriz Tipan') }}
        </h2>
    </div>
    <div class="absolute flex right-0 h-16">
        <!-- Settings Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            
            <x-dropdown align="right" width="48">
                
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-100 bg-rgba-blue-sky-200 hover:text-gray-400 focus:outline-none transition ease-in-out duration-150">
                        <ion-icon name="person-circle-sharp" class="w-10 h-10 mx-3"></ion-icon>
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Perfil') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Salir') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>