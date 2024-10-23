<x-app-layout>
    <x-navs.navigation />
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-slot name="title">
        Peticiones por Cotizaciones
    </x-slot>
    {{-- Seccion lista de posts publicados --}}
    <div class="mx-4 my-4">
        <h1 class="text-2xl font-bold inline border-l-2 border-rgba-blue-sky-200 p-3">Listado de peticiones por
            cotización.</h1>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-300 mt-12">
            <table class="peticionCotizas w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-5">
                            #
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Nombres
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Contacto
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Servicio
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Estado Peticion
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Precio Servicio
                        </th>
                        <th scope="col" class="px-6 py-5 text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peticionesCotiza as $key => $peticion)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-500 odd:text-white even:bg-gray-50 border-b even:text-black">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $key + 1 }}
                            </th>
                            <td class="px-6 py-4 w-40">
                                {{ $peticion->Nombres }}
                            </td>
                            <td class="px-6 py-4 flex w-40">
                                {{ $peticion->Correo }}
                                <br>
                                {{ $peticion->Telefono }}
                                <br>
                                {{ $peticion->Direccion }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $peticion->Servicio }}
                            </td>
                            @if ($peticion->Estado == 'Pendiente')
                                <td class="px-6 py-4 text-center font-bold">
                                    <div class="p-2 bg-slate-300 rounded-lg bg-opacity-45">
                                        {{ $peticion->Estado }}...
                                    </div>
                                </td>
                            @elseif ($peticion->Estado == 'Aceptado')
                                <td class="px-6 py-4 text-center font-bold text-green-700">
                                    <div class="p-2 bg-green-300 rounded-lg bg-opacity-45">
                                        {{ $peticion->Estado }}...
                                    </div>
                                </td>
                            @elseif ($peticion->Estado == 'Cancelado')
                                <td class="px-6 py-4 text-center font-bold text-red-600">
                                    <div class="p-2 bg-red-300 rounded-lg bg-opacity-45">
                                        {{ $peticion->Estado }}...
                                    </div>
                                </td>
                            @endif
                            <td class="px-6 py-4 text-center">
                                {{ $peticion->Precio }} $
                            </td>

                            <td>
                                <form method="POST">
                                    @csrf
                                    <div class="flex justify-center gap-3">
                                        <div class="relative h-20 flex items-center justify-center">
                                            <button data-id="{{ $peticion->id }}" type="button"
                                                class="aceptarPeticion flex items-center text-sm py-2 px-2 rounded-lg bg-green-500 text-white active:bg-green-700 active:translate-y-1 duration-100">
                                                <ion-icon name="checkmark-outline"></ion-icon>
                                            </button>
                                        </div>
                                        <div class="relative  h-20 flex items-center justify-center">
                                            <button data-id="{{ $peticion->id }}" type="button"
                                                class="cancelarPeticion flex items-center text-sm py-2 px-2 rounded-lg bg-red-500 text-white active:bg-red-800 active:translate-y-1 duration-100">
                                                <ion-icon name="close-outline"></ion-icon>
                                            </button>
                                        </div>
                                    </div>
                                </form>


                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Paginación generada automaticamente por Flowbite UI --}}
            <div class="w-full h-20 mt-10 flex justify-end">
                <div class="w-2/6 h-full mr-10">
                    {{ $peticionesCotiza->links() }}
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
        //Peticiòn para realizar la busqueda de los datos del cliente con AJAX.
        $(document).on("click", '.aceptarPeticion', function(e) {
            e.preventDefault();
            let peticionID = $(this).data("id")
            $.ajax({
                url: "{{ route('peticionCotiza.update') }}",
                method: "PATCH",
                data: {
                    id: peticionID,
                    Estado: "Aceptado"
                },
                success: function(response) {
                    if(response.status === "success"){
                        Command: toastr["success"]("La petición a sido aceptada!", "Notificación")
                    };
                    $(".peticionCotizas").load(' .peticionCotizas')
                }
            })
        })
        $(document).on("click", '.cancelarPeticion', function(e) {
            e.preventDefault();
            let peticionID = $(this).data("id")
            $.ajax({
                url: "{{ route('peticionCotiza.update') }}",
                method: "PATCH",
                data: {
                    id: peticionID,
                    Estado: "Cancelado"
                },
                success: function(response) {
                    if(response.status === "success"){
                        Command: toastr["success"]("La petición a sido cancelada!", "Notificación")
                    };
                    $(".peticionCotizas").load(' .peticionCotizas')
                }
            })
        })
    </script>
</x-app-layout>
