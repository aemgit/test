<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family:sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                padding: 15px;
            }


            .content {
                text-align: center;
            }


            a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            table {
    border-collapse: collapse;
}
            td,th {
                border-bottom: 2px solid #636b6f;
                
            }
            td {
                font-weight: 600;
                padding: 5px;
            }
        </style>
    </head>
    <body>
   <h1 class="text-primary">Lista de Hoteles</h1>
 
<table class="table table-bordered" id="tableMonedas">
  <thead>
    <tr>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Telefono</th>
        <th class="text-center">fax</th>
        <th class="text-center">Direccion</th>
        <th class="text-center">info</th>
    </tr>
  </thead>
  <tbody>
        <!-- con el siguiente bucle se listaran la lista de  hoteles de la base de datos -->
    <!-- la variable $hts proviene del controlador llamado hotelcontroller -->
    @foreach($hts as $hotel)
        <tr>
            <td class="text-center">{{ $hotel->nombre}}</td>
            <td class="text-center">{{ $hotel->descripcion }}</td>
            <td class="text-center">{{ $hotel->tlfno}}</td>
            <td class="text-center">{{ $hotel->fax}}</td>
            <td class="text-center">{{ $hotel->direccion}}</td>
            <td>
           <a href="{{ url('hotel/'.$hotel->id) }}">ver</a>
 
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
    </body>
</html>
