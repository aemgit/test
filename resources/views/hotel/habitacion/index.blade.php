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
   <h1 class="text-primary">Lista de habitaciones</h1>
 
<table class="table table-bordered" id="tableMonedas">
  <thead>
    <tr>
        <th class="text-center">nombre</th>
        <th class="text-center">pvp</th>
        <th class="text-center">descripcion</th>
        <th class="text-center">capacidad</th>
        <th class="text-center">info</th>
    </tr>
  </thead>
  <tbody>
  <!-- con el siguiente bucle se listaran las habitaciones de un hotel -->
    @foreach($hbt as $habitacion)
        
        <tr>
            <td class="text-center">{{ $habitacion->nombre }}</td>
            <td class="text-center">{{ $habitacion->pvp_habitacion }}</td>
            <td class="text-center">{{ $habitacion->descripcion }}</td>
            <td class="text-center">{{ $habitacion->capacidad }} personas</td>
            <td> <a href="{{ url('hotel/'.$habitacion->id_hotel. '/room/' . $habitacion->id_habitacion) }}">ver</a></td>
        
        </tr>
        
    @endforeach
  </tbody>
</table>
    </body>
</html>