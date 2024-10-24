<x-app-layout>
    <x-navs.navigation />
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-slot name="title">
        Buzon de peticiones
    </x-slot>
    {{-- Seccion lista de usuarios registrados --}}

    <div class="mx-4 my-4 ">
        <h1 class="text-2xl font-bold inline border-l-2 border-rgba-blue-sky-200 p-3">Lista de peticiones por Buzon.</h1>
        <div class=" overflow-x-auto shadow-md sm:rounded-lg border border-gray-300 mt-10">
            <div class="grid grid-cols-3 gap-4 p-5">
                @foreach ($peticiones as $peticion)
                    <div
                        class="max-w-sm p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between my-2">
                            <ion-icon name="chatbox-ellipses" class="text-white text-3xl"></ion-icon>
                            @if ($peticion->state_p === null)
                                <div class="rounded-full border bg-white w-5 h-5" id="point{{ $peticion->id }}"></div>
                            @elseif($peticion->state_p === 'Aceptada')
                                <div class="rounded-full border bg-green-500 border-green-500 w-5 h-5"
                                    id="point{{ $peticion->id }}">
                                </div>
                            @elseif($peticion->state_p === 'Cancelada')
                                <div class="rounded-full border bg-red-500 border-red-500 w-5 h-5"
                                    id="point{{ $peticion->id }}">
                                </div>
                            @endif
                        </div>
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ $peticion->asunto_c }}</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $peticion->mensaje_c }}
                        </p>
                        <p class="mb-3 font-normal text-sm text-gray-500 dark:text-gray-400">Por:
                            {{ $peticion->nombre_c }}</p>
                        <h5 class="mb-2 text-xl font-semibold tracking-wider text-gray-900 dark:text-white">
                            <ion-icon name="call-outline"></ion-icon> {{ $peticion->telefono_c }}</h5>
                        <div class="h-20">
                            <form action="POST" class="flex flex-col items-end gap-2 my-5 w-full">
                                @csrf
                                <a href="#" data-id="{{ $peticion->id }}"
                                    class="acepted inline-flex font-medium items-center text-blue-600 hover:underline">
                                    Aceptar <ion-icon name="chevron-back-outline"></ion-icon>
                                </a>
                                <a href="#" data-id="{{ $peticion->id }}"
                                    class="canceled inline-flex font-medium items-center text-blue-600 hover:underline">
                                    Cancelar <ion-icon name="chevron-back-outline"></ion-icon>
                                </a>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
            {{-- Paginación generada automaticamente por Flowbite UI --}}
            <div class="w-full h-20 mt-10 flex justify-end">
                <div class="w-2/6 h-full mr-10">
                    {{ $peticiones->links() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        $(document).on('click', '.acepted', function(e) {
            e.preventDefault();
            let peticionID = $(this).data('id');

            let point = $('#point' + peticionID);

            $.ajax({
                url: "{{ route('buzon.update') }}",
                method: "PATCH",
                data: {
                    id: peticionID,
                    state_p: "Aceptada"
                },
                success: function(response) {
                    console.log(response)
                    if (point.hasClass('bg-white')) {
                        point.removeClass('bg-white')
                        point.addClass('bg-green-500 border-green-500')
                    } else {
                        point.removeClass('bg-red-500 border-red-500 bg-white')
                        point.addClass('bg-green-500 border-green-500')
                    }

                }
            })
        })

        $(document).on('click', '.canceled', function(e) {
            e.preventDefault();
            let peticionID = $(this).data('id');
            let point = $('#point' + peticionID);

            $.ajax({
                url: "{{ route('buzon.update') }}",
                method: "PATCH",
                data: {
                    id: peticionID,
                    state_p: "Cancelada"
                },
                success: function(response) {
                    console.log(response)
                    if (point.hasClass('bg-white')) {
                        point.removeClass('bg-white')
                        point.addClass('bg-red-500 border-red-500')
                    } else {
                        point.removeClass('bg-green-500 border-green-500 bg-white')
                        point.addClass('bg-red-500 border-red-500')
                    }
                }
            })
        })
    </script>
</x-app-layout>
