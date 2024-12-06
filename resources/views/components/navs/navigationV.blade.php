<nav x-data="{ open: false }" class='{{ $classes ?? '' }} flex-col items-start sm:flex-row w-full'>

    <div class="hamburger_nav -me-2 flex items-center sm:hidden mx-2">
        <button @click="open = ! open"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div class=" nav_options_img lex py-3 w-36">
        <img src="/images/autoTipan.png" alt="Logo Automotriz Tipan" width="150" height="40">
    </div>
    <div class="flex nav_options">
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('home') }}">
            Inicio
        </a>
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('home') }}#conocenos">
            ¿Quienes somos?
        </a>
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('service') }}">
            Servicios
        </a>
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('contact') }}">
            Contactanos
        </a>
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('posts.index') }}">
            Más...
        </a>

    </div>
    <div class="nav_options_log flex">
        @if (Route::has('login'))
            <div class="flex mr-1">
                @auth
                    @if (Auth::user()->user_type === 'user')
                        <div class="absolute flex right-2 top-4 h-16">
                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ms-2">

                                <x-dropdown align="right" width="48">

                                    <x-slot name="trigger">
                                        <button
                                            class="inline-flex items-center px-2 py-1 border border-transparent text-xs leading-4 font-medium rounded-md text-slate-500 hover:text-gray-400 focus:outline-none transition ease-in-out duration-150">
                                            <div class="flex flex-col items-center">
                                                <ion-icon name="person-circle-sharp" class="w-10 h-10 mx-3"></ion-icon>
                                                <div>{{ Auth::user()->name }}</div>
                                            </div>


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
                    @elseif(Auth::user()->user_type === 'admin')
                        <a href="{{ route('dashboard') }}" class='{{ $stylesLink ?? '' }}'
                            class="text-center"><ion-icon name="home-outline" class="mr-2"></ion-icon> Dashboard</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class='{{ $stylesLink ?? '' }}'>Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class='{{ $stylesLink ?? '' }}'>Register</a>
                    @endif
                @endauth
            </div>
        @endif

    </div>

    <div :class="{ 'block': open, 'hidden': !open }" class="flex flex-col min-w-min">
        <div class="flex py-3 w-36">
            <img src="/images/autoTipan.png" alt="Logo Automotriz Tipan" width="150" height="40">
        </div>
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('home') }}">
            Inicio
        </a>
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('home') }}#conocenos">
            ¿Quienes somos?
        </a>
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('service') }}">
            Servicios
        </a>
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('contact') }}">
            Contactanos
        </a>
        <a class='{{ $stylesLink ?? '' }}' href="{{ route('posts.index') }}">
            Más...
        </a>
    </div>

    <script>
        let nav_options = document.querySelector(".nav_options")
        let nav_options_img = document.querySelector(".nav_options_img")
        let nav_options_log = document.querySelector(".nav_options_log")
        if (window.innerWidth <= 600) {
            nav_options.classList.add('hidden')
            nav_options_img.classList.add('hidden')
            nav_options_log.classList.add('hidden')
        } else {
            nav_options.classList.add('block')
            nav_options_img.classList.add('block')
            nav_options_log.classList.add('block')
        }
        $(document).on("click", ".hamburger_nav", function(e) {
            e.preventDefault();

            let nav_options = $(".nav_options");

            nav_options.addClass('hidden')
        })
    </script>
</nav>
