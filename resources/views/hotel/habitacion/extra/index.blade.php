<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>

        $(document).ready(function(){

   // jQuery methods go here...
    $(":checkbox").change(function(){
    var sum = 00;
    var names = $(':checked').map(function(){
        sum += (this.value - 0);
        return this.name;
    }).get().join(',');
    var spans = $('span.pvp');
    spans[0].innerHTML = sum;
});

}); 

</script>

  <script>
  
$(document).ready(function(){
    $("#firstDate").datepicker({

}); 
$("#secondDate").datepicker({
    onSelect: function () {
        myfunc();
    }
}); 

function myfunc(){
    var start= $("#firstDate").datepicker("getDate");
    var end= $("#secondDate").datepicker("getDate");
    days = (end- start) / (1000 * 60 * 60 * 24);
    /*alert(Math.round(days));*/
      var date = $('span.dater');
    var date = date[0].innerHTML = Math.round(days);
      var pvp = $('span.pvp').text();
      var spans = $('span.total');
       spans[0].innerHTML = date * pvp + " €" ;
}

});  
  </script>
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
   <h1 class="text-primary">Lista de extras disponibles</h1>
 
<table class="table table-bordered" id="tableMonedas">
  <thead>
    <tr>
        <th class="text-center">Extra</th>
        <th class="text-center">Descripcion</th>
        <th class="text-center">Precio</th>
        <th class="text-center">info</th>
    </tr>
  </thead>
  <tbody>
<!-- con el siguiente bucle se listaran los extras de una habitacion -->
<form>
    @foreach($ext as $extra)
        
        <tr>
           
            <td class="text-center">{{ $extra->nombre}}</td>
            <td class="text-center">{{ $extra->descripcion}}</td>
            <td class="text-center">{{ $extra->pvp }}</td>
                        <td class="text-center">
<label for="taxs"></label>
<input class="taxfrom" type="checkbox" name="tax" id="taxs" value="{{$extra->pvp}}">
            </td>
        </tr>
        
    @endforeach
    <br>

</form>



  </tbody>
</table>
<div class="text">
       <p class="pvp-text">el precio total/dia de los extras es: <span class="pvp"></p>
       <form><p>Entrada: <input type="text" id="firstDate"></p>

<p>Salida: <input type="text" id="secondDate"></p></form>
       <p></span> dias deseados <span class="dater"></span></p>
        <p class="total">extras/día * días totales <span class="total"></span></p>
    </div>

    </body>
</html>