<x-app-layout>
    <div>
        <x-navs.navigation />
    </div>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-slot name="title">
        Espacio de Trabajo
    </x-slot>


    <div class="py-12 mx-4 my-4 ">
        <h1 class="text-2xl font-bold inline border-l-2 border-rgba-blue-sky-200 p-3">Resumen de datos generados.</h1>
        <div class="max-w-7xl grid grid-cols-4 gap-10 my-10 mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('cotizacion.index') }}" class="overflow-hidden shadow-lg sm:rounded-lg w-64 bg-green-400 hover:bg-slate-500 hover:bg-opacity-40">
                <div class="px-6 py-4 text-zinc-800 text-xl font-bold">
                    {{ __("Cotizaciones") }}
                </div>
                <div class="relative pb-5 gap-5 text-zinc-800 flex items-center justify-center">
                    <label class="text-4xl font-bold">+ {{ $cotizaciones }}</label>
                    <ion-icon name="bag-handle-outline" class="w-20 h-20"></ion-icon>                    
                </div>
                <p class="p-4 text-xs text-slate-700 h-full border-t-2 border-black rounded-b-lg bg-white">Aqui se muestran la cantidad de cotizaciones creadas.</p>
            </a>
            <a href="{{ route('cliente.index') }}" class="overflow-hidden shadow-lg sm:rounded-lg w-64 bg-yellow-400 hover:bg-slate-500 hover:bg-opacity-40">
                <div class="px-6 py-4 text-zinc-800 text-xl font-bold">
                    {{ __("Clientes") }}
                </div>
                <div class="relative pb-5 gap-5 text-zinc-800 flex items-center justify-center">
                    <label class="text-4xl font-bold">+ {{ $clientes }}</label>
                    <ion-icon name="man-outline" class="w-20 h-20"></ion-icon>               
                </div>
                <p class="p-4 text-xs text-slate-700 h-full border-t-2 border-black rounded-b-lg bg-white">Aqui se muestran la cantidad clientes registrados.</p>
            </a>
            <a href="{{ route('users.index') }}" class="overflow-hidden shadow-lg sm:rounded-lg w-64 bg-orange-400 hover:bg-slate-500 hover:bg-opacity-40">
                <div class="px-6 py-4 text-zinc-800 text-xl font-bold">
                    {{ __("Usuarios") }}
                </div>
                <div class="relative pb-5 gap-5 text-zinc-800 flex items-center justify-center">
                    <label class="text-4xl font-bold">+ {{ $usuarios }}</label>
                    <ion-icon name="people-outline" class="w-20 h-20"></ion-icon>                    
                </div>
                <p class="p-4 text-xs text-slate-700 h-full border-t-2 border-black rounded-b-lg bg-white">Aqui se muestran la cantidad de usuarios registrados.</p>
            </a>
            <a href="{{ route('ListPost') }}" class="overflow-hidden shadow-lg sm:rounded-lg w-64 bg-lime-400 hover:bg-slate-500 hover:bg-opacity-40">
                <div class="px-6 py-4 text-zinc-800 text-xl font-bold">
                    {{ __("Posts Creados") }}
                </div>
                <div class="relative pb-5 gap-5 text-zinc-800 flex items-center justify-center">
                    <label class="text-4xl font-bold">+ {{ $posts }}</label>
                    <ion-icon name="file-tray-full-outline" class="w-20 h-20"></ion-icon>                   
                </div>
                <p class="p-4 text-xs text-slate-700 h-full border-t-2 border-black rounded-b-lg bg-white">Aqui se muestran la cantidad de posts publicados.</p>
            </a>
            <a href="{{ route('peticionCotiza.index') }}" class="overflow-hidden shadow-lg sm:rounded-lg w-64 bg-lime-400 hover:bg-slate-500 hover:bg-opacity-40">
                <div class="px-6 py-4 text-zinc-800 text-sm font-bold">
                    {{ __("Peticiones por Cotización") }}
                </div>
                <div class="relative pb-5 gap-5 text-zinc-800 flex items-center justify-center">
                    <label class="text-4xl font-bold">+ {{ $peticionCotizas }}</label>
                    <ion-icon name="mail-unread-outline" class="w-20 h-20"></ion-icon>              
                </div>
                <p class="p-4 text-xs text-slate-700 h-full border-t-2 border-black rounded-b-lg bg-white">Aqui se muestran la cantidad de peticiones por cotizacion de servicios realizadas.</p>
            </a>
        </div>
    </div>
</x-app-layout>
