<x-app-layout>
    
    <x-navs.navigationV classes="p-2 fixed w-full top-0 flex justify-between  bg-white text-black 
    text-xs items-center z-30 shadow-md" stylesLink=" py-3 ml-4 text-slate-500 hover:text-slate-900 hover:font-bold duration-300 hover:transform hover:translate-y-0.5 
    inline-flex items-center px-1 pt-1 hover:border-b-2 hover:border-rgba-blue-sky-200 leading-1 focus:outline-none focus:border-rgba-blue-sky-100 transition duration-200 ease-in-out"/>
    
    <x-slot name="title">
        Servicios
    </x-slot>
    
    <section class="h-full grid ">
        <div class="w-full h-auto">
            {{-- Seccion del header de la pagina de servicios --}}
        <div class="mt-28 flex mb-7">
            <h1 class="font-bold w-4/6 text-3xl text-white tracking-widest border-b-2 px-5 py-20 bg-rgba-blue-sky-200 rounded-r-lg">
                SERVICIOS MECÁNICA AUTOMOTRIZ TIPAN          
               
            </h1>
            <p class="p-5 w-2/5 text-sm flex flex-col justify-center">¿Estas interesado en nuestros servicios? <br> <strong class="text-2xl">¡Cotiza ahora mismo!</strong></p>            
        </div>
        {{-- Seccion del body de la pagina de servicios --}}
        <div class="w-full flex justify-center py-5">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-3 lg:gap-5">
                @foreach ($servicios as $service )
                    <x-card-service-info image="{{ $service->se_image }}" title='{{ $service->se_nombre }}' description="{!! $service->se_descripcion !!}" price='{{ $service->se_precio }}' id='{{ $service->id }}'/>                    
                @endforeach                
            </div>
        </div>
        </div>

        {{-- Seccion del footer de la pagina de servicios --}}
        <x-footer />
    </section>
</x-app-layout>