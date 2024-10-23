<x-app-layout>
    <x-navs.navigation />
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-slot name="title">
        Posts AMT
    </x-slot>
    <div class="w-full border p-5">
        {{-- Titulo de la seccion para la creación de Cotizaciones --}}
        <div>
            <h1 class="text-2xl font-bold ml-10 mt-10">Generación de Cotizaciones</h1>
            <hr>
        </div>

        {{-- Formulario para la creación de las Cotizaciones --}}
        <form action="{{ route('cotizacion.store') }}" method="POST">
            @csrf
            {{-- Cuerpo de la cotizacion a crear --}}
            <div class="relative mt-10 w-full border border-1 border-gray-400 rounded-md">
                {{-- Subtitulo del cuerpo de la cotización --}}
                <div class="flex justify-between items-center p-10 border-b">
                    <h2 class="text-xl font-bold">Detalles de la Cotización</h2>
                </div>
                {{-- Seccion de la informacion a presentar dentro de la cotización --}}
                <div class="w-full border-b py-5 px-14 bg-gray-500 text-gray-200">
                    <div class="w-full flex justify-end items-center gap-5 mb-3">
                        <label for="Nombre">Buscar Cliente:</label>
                        <br>
                        <div class="flex items-center gap-5">
                            <input type="text" class="text-sm mt-1 w-64 rounded-md text-black" name="SearchCli"
                                id="SearchCli" placeholder="Cedula..." />
                            <button id="searchClient">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </div>
                    </div>

                    {{-- Sección datos del cliente --}}
                    <div class="w-full py-3">
                        <h3 class="text-lg font-semibold"><u>Datos del Cliente</u></h3>
                        <div class="w-full grid grid-cols-3 gap-x-32 gap-y-3 items-center mt-3">
                            <div class="w-64">
                                <label for="Cedula">Cedula:</label>
                                <br>
                                <input type="text" class="text-sm mt-1 w-64 rounded-md text-black" name="cliente_id"
                                    id="cliente_id" readonly />
                                @error('cliente_id')
                                    <div class="flex gap-2 items-center p-4 mt-2 bg-red-200 bg-opacity-50 h-5 rounded-lg">
                                        <ion-icon name="alert-circle-outline" class="text-red-600"></ion-icon>
                                        <label class="text-xs font-bold text-red-600">{{ $message }}</label>
                                    </div>
                                @enderror
                            </div>
                            <div class="w-64">
                                <label for="Cliente">Nombre:</label>
                                <br>
                                <input type="text" class="text-sm mt-1 w-64 rounded-md text-black" name="Cliente"
                                    id="Cliente" readonly />
                                @error('Cliente')
                                    <div class="flex gap-2 items-center p-4 mt-2 bg-red-200 bg-opacity-50 h-5 rounded-lg">
                                        <ion-icon name="alert-circle-outline" class="text-red-600"></ion-icon>
                                        <label class="text-xs font-bold text-red-600">{{ $message }}</label>
                                    </div>
                                @enderror
                            </div>
                            <div class="w-64">
                                <label for="Correo">Correo Electronico:</label>
                                <br>
                                <input type="text" class="text-sm mt-1 w-64 rounded-md text-black" name="CCorreo"
                                    id="CCorreo" readonly />
                                @error('CCorreo')
                                    <div class="flex gap-2 items-center p-4 mt-2 bg-red-200 bg-opacity-50 h-5 rounded-lg">
                                        <ion-icon name="alert-circle-outline" class="text-red-600"></ion-icon>
                                        <label class="text-xs font-bold text-red-600">{{ $message }}</label>
                                    </div>
                                @enderror
                            </div>
                            <div class="w-64">
                                <label for="Telefono">Telefono:</label>
                                <br>
                                <input type="text" class="text-sm mt-1 w-64 rounded-md text-black" name="CTelefono"
                                    id="CTelefono" readonly />
                                @error('CTelefono')
                                    <div class="flex gap-2 items-center p-4 mt-2 bg-red-200 bg-opacity-50 h-5 rounded-lg">
                                        <ion-icon name="alert-circle-outline" class="text-red-600"></ion-icon>
                                        <label class="text-xs font-bold text-red-600">{{ $message }}</label>
                                    </div>
                                @enderror
                            </div>
                            <div class="w-64">
                                @error('CTelefono')
                                    <div class="flex flex-col gap-2 p-4 mt-2 bg-blue-400 bg-opacity-50 h-auto rounded-lg">
                                        <label class="text-xs font-bold text-slate-800">Si no existe el cliente registralo!</label>
                                        <a href="{{ route('cliente.index') }}" class="text-xs border-b-2 border-b-blue-600 w-3/4 hover:font-bold">Agregar cliente al sistema.</a>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    {{-- Sección Informacion de la empresa. --}}
                    <div class="w-full py-3">
                        <h3 class="text-lg font-semibold"><u>Datos de la Empresa</u></h3>
                        <div class="w-full flex gap-x-32 items-center mt-3">
                            <div class="w-64">
                                <label for="Empresa">Empresa:</label>
                                <p class="text-sm mt-1">Automotriz Tipán</p>
                            </div>
                            <div class="w-64">
                                <label for="Ruc"><i></i>RUC:</label>
                                <p class="text-sm mt-1">1001785426352</p>
                            </div>
                        </div>
                    </div>


                    {{-- Sección Informacion de la cotizacion. --}}
                    <div class="w-full py-3">
                        <h3 class="text-lg font-semibold"><u>Generación de la cotiza</u></h3>
                        <div class="w-full flex gap-x-32 items-center mt-3">
                            <div class="w-64">
                                <label for="Empresa" class="text-sm">Fecha de Generación:</label>
                                <br>
                                <input type="text" class="text-sm mt-1 w-64 rounded-md text-black" name="FCreacion"
                                    id="FCreacion" value="{{ $date }}" readonly />
                            </div>
                        </div>
                    </div>


                </div>


                {{-- Seccion de tabla de la cotización. --}}
                <div class="w-full p-10">

                    {{-- Sección de la tabla. --}}
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-300">
                        <table
                            class="tableDetalle w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-5">
                                        Codigo
                                    </th>
                                    <th scope="col" class="px-6 py-5">
                                        Descripción
                                    </th>
                                    <th scope="col" class="px-6 py-5">
                                        Cantidad
                                    </th>
                                    <th scope="col" class="px-6 py-5">
                                        P. Unitario
                                    </th>
                                    <th scope="col" class="px-6 py-5 text-center">
                                        V. Total
                                    </th>
                                    <th scope="col" class="px-6 py-5 text-center">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detalles as $detalle)
                                    <tr
                                        class=" odd:bg-white odd:dark:bg-gray-500 odd:text-white even:bg-gray-50 border-b even:text-black">
                                        <td class="px-5 py-2">{{ $detalle->producto_id }}</td>
                                        <td class="px-5 py-2">{{ $detalle->Descripcion }}</td>
                                        <td class="px-5 py-2">{{ $detalle->Cantidad }}</td>
                                        <td class="px-5 py-2">{{ $detalle->PUnitario }} $</td>
                                        <td class="px-5 py-2">
                                            {{ $detalle->Cantidad * $detalle->PUnitario }} $
                                        </td>
                                        <td>
                                            <div class="relative w-full h-10 flex items-center justify-center">
                                                <button data-id="{{ $detalle->id }}" type="button"
                                                    class="deleteDetalle flex items-center text-sm py-2 px-2 rounded-lg bg-red-500 text-white active:bg-red-800 active:translate-y-1 duration-100">
                                                    <ion-icon name="close-outline"></ion-icon>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr class="border-t">
                                    <td colspan="4" class="text-right p-5 text-black">
                                        Subtotal:
                                    </td>
                                    <td class="text-center">
                                        <input type="number" value="{{ $Subtotal }}"
                                            class="w-20 text-center text-sm" id="Subtotal_C" name="Subtotal_C">
                                        $
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td colspan="4" class="text-right p-5 text-black">
                                        IVA:
                                    </td>
                                    <td class="text-center">
                                        <input type="number" value="{{ $Subtotal * 0.12 }}"
                                            class="w-20 text-center text-sm" id="IVA" name="IVA"> $
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td colspan="4" class="text-right p-5 text-black">
                                        Total:
                                    </td>
                                    <td class="text-center">
                                        <input type="number" value="{{ $Subtotal + $Subtotal * 0.12 }}"
                                            class="w-20 text-center text-sm" id="Total" name="Total"> $
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <x-modals.modalQuestion message="Estas seguro de realizar dicha accion?" />
        </form>

        {{-- Sección para insertar los producto o servicios dentro de la cotiza. --}}
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tr class="bg-gray-50 border-b text-black">

                <form id="addDetalle" method="Post">

                    @csrf
                    <td class="p-5">
                        <input type="text" name="cotizacion_id" id="cotizacion_id"
                            class="text-black h-9 text-sm rounded-md border border-gray-400 hidden" />
                        <input type="text" name="producto_id" id="producto_id" placeholder="ID..."
                            class="text-black h-9 text-sm rounded-md border border-gray-400" />
                    </td>
                    <td>
                        <input type="text" name="Descripcion" id="Descripcion" placeholder="Descripción..."
                            class="text-black w-full h-9 text-sm rounded-md border border-gray-400" />
                    </td>
                    <td class=" text-center">
                        <input type="number" name="Cantidad" id="Cantidad" min="1" max="10"
                            class="text-black h-9 text-sm rounded-md border border-gray-400" value="1" />
                    </td>
                    <td class=" text-center">
                        <input type="number" name="Subtotal" id="subtotal" min="0.00" step="0.01"
                            class="text-black  h-9 text-sm rounded-md border border-gray-400" value="0.00" /> $
                    </td>
                    <td>
                        <div class="relative w-full h-20 flex items-center justify-center">
                            <button type="submit"
                                class="createDetalle flex items-center text-sm py-3 px-2 rounded-lg bg-rgba-blue-sky-200 text-white active:bg-blue-600 active:translate-y-1 duration-100">
                                <ion-icon name="add-sharp" class="w-5 h-5 mx-2"></ion-icon>
                            </button>
                        </div>
                    </td>
                </form>
            </tr>


        </table>
    </div>
    </div>

    {{-- Boton para guardar la cotizacion. --}}
    <div class="relative w-full h-28">
        <button data-modal-target="popup-modal-question" data-modal-toggle="popup-modal-question" type="button"
            class="absolute right-10 bottom-10 inline-flex items-center px-10 py-4 bg-rgba-blue-sky-200 text-white hover:bg-rgba-blue-600
                                    text-xs active:transform active:translate-y-1 transition-all hover:ring cursor-pointer rounded-md">
            Hecho
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </button>
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
        $('#searchClient').on("click", function(e) {
            e.preventDefault();
            let cliente = $("#SearchCli").val();
            $.ajax({
                url: "{{ route('cliente.show') }}",
                type: "GET",
                data: {
                    cliente: cliente
                },
                success: function(response) {
                    $("#cliente_id").val(response.id)
                    $("#Cliente").val(response.Nombre)
                    $("#CCorreo").val(response.Correo)
                    $("#CTelefono").val(response.Telefono)
                }
            })
        })

        //Busqueda del producto para el detalle
        $("#producto_id").on("keyup", function(e) {
            e.preventDefault();

            let producto_id = $('#producto_id').val()

            $.ajax({
                url: "{{ route('productos.search') }}",
                type: "GET",
                data: {
                    producto_id: producto_id
                },
                success: function(response) {
                    if (response.length >= 1 && producto_id != '') {
                        $('#Descripcion').val(response[0].Descripcion)
                        $('#subtotal').val(response[0].PUnitario)
                    } else {
                        $('#Descripcion').val('')
                        $('#Subtotal').val('')
                    }
                },
                error: function(error) {
                    console.warn('Error En el Servidor');
                }
            })
        })

        //Peticion para agregar detalles en la cotiza con AJAX
        $("#addDetalle").on("submit", function(e) {
            e.preventDefault();

            let producto_id = $("#producto_id").val()
            let Descripcion = $("#Descripcion").val()
            let Cantidad = $("#Cantidad").val()
            let PUnitario = $("#subtotal").val()
            let Subtotal = $("#subtotal").val() * Cantidad

            console.log(Subtotal)


            $.ajax({
                method: 'POST',
                url: "{{ route('detalleCotiza.store') }}",
                data: {
                    cotizacion_id: null,
                    producto_id: producto_id,
                    Descripcion: Descripcion,
                    Cantidad: Cantidad,
                    PUnitario: PUnitario,
                    Subtotal: Subtotal
                },
                success: function(response) {
                    $(".tableDetalle").load(' .tableDetalle')
                    $('#producto_id').val('')
                    $('#Descripcion').val('')
                    $('#Subtotal').val('')
                }
            })
        })

        //Peticion para la eliminacion del detalle.
        $(document).on("click", '.deleteDetalle', function(e) {
            e.preventDefault();

            let idDetalle = $(this).data('id');

            if (confirm(`¿Estas seguro de eliminar el detalle con el id: ${idDetalle}?`)) {
                $.ajax({
                    url: "{{ route('detalleCotiza.destroy') }}",
                    method: "DELETE",
                    data: {
                        idDetalle: idDetalle
                    },
                    success: function(response) {
                        alert(response)
                        $(".tableDetalle").load(' .tableDetalle')
                    }
                })
            }
        })
    </script>

    </div>

</x-app-layout>
