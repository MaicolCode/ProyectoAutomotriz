<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de cotizaciones</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    * {
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .bodyContent {
        margin-top: 50px;
    }

    .bodyContent .tableCotiza {
        width: 100%;
        border: 2px solid black
    }

    .tableCotiza thead {
        background: rgb(41, 76, 253);
        color:white;
    }

    .tableCotiza th {
        padding: 10px;
        font-size: 15px;
    }

    .tableCotiza tbody tr:nth-child(odd) {
        background: rgba(222, 220, 220, 0.76);
    }

    .tableCotiza tbody tr {
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .tableCotiza tbody td {
        font-size: 14px;
        text-align:left ;
    }

    .bottomContent {
        margin-top: 30px;
        line-height: 20px;
        border-top: 1px solid black;        
    }

</style>

<body>
    <div class="headerContent">
        <div style="position: relative; height:100px; width:100%;"">
            <img src="images/autoTipan.png" alt="Logo Automotriz Tipan" width="200" height="80" style="position: absolute; right:36%;">
        </div>
        <h2 class="title" style="text-align: center">Lista de cotizaciones generadas dentro de la Mecanica Automotriz Tipan</h2>
        <hr>
        <p>
            A continuación se da a conocer la lista de cotizaciones generadas en el trancurso de los dias, por servicios
            prestados al cliente.
        </p>
    </div>
    <div class="bodyContent">
        <table class="tableCotiza">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Cliente
                    </th>
                    <th>
                        Contacto
                    </th>
                    <th>
                        Fecha de Generación
                    </th>
                    <th>
                        Subtotal
                    </th>
                    <th>
                        IVA
                    </th>
                    <th>
                        Total
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cotizaciones as $key => $cotizacion)
                    <tr>
                        <td style="text-align: center;">
                            {{ $key + 1 }}
                        </td>
                        <td>
                            {{ $cotizacion->Cliente }}
                        </td>
                        <td>
                            {{ $cotizacion->CCorreo }}
                            <br>
                            {{ $cotizacion->CTelefono }}
                        </td>
                        <td>
                            Generada el {{ $cotizacion->FCreacion }}
                        </td>
                        <td style="text-align: center;">
                            {{ $cotizacion->Subtotal_C}} $
                        </td>
                        <td style="text-align: center;">
                            {{ $cotizacion->IVA}} $
                        </td>
                        <td style="text-align: center;">
                            {{ $cotizacion->Total}} $
                        </td>                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="bottomContent" >
        <h4>DESCRIPCION DEL INFORME</h4>
        <div class="section_info" style="font-size:14px">
            <label>Numero de cotizaciones generadas: </label>
            {{ $numero }}
        </div>
        <div class="section_info" style="font-size:14px">
            <label>Total recolectado por servicios realizados: </label>
            {{ $total }} $
        </div>
    </div>

</body>

</html>
