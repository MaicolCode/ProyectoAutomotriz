
<div class="max-w-sm bg-gradient-to-b  from-rgba-blue-sky-100 to-rgba-blue-sky-200 rounded-lg shadow-md shadow-slate-700 ">
    <div class="relative w-full h-44 rounded-t-lg">
        <img src="{{ $image }}" alt="" class="w-full h-full object-cover rounded-t-lg "/>
    </div>
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white h-16">{{ $title }}</h5>
        <div class="prose text-white h-40  overflow-hidden">
            {!! $description !!}
        </div>
        <p class="my-10 font-bold text-gray-700 text-xl text-end dark:text-gray-400">DESDE: {{ $price }} $</p>        
        <div class="w-full flex justify-center mt-5 border-t-2 border-t-white">
            <a href="{{ route('services.show', $id) }}" class="inline-flex items-center mt-5 px-14 py-3 text-lg font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-500  active:transform active:translate-y-1 transition-all cursor-pointer">
                COTIZAR SERVICIO
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>
