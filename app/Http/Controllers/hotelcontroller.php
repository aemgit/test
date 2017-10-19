<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
 
use App\hotel;

use DB;
 
class hotelcontroller extends Controller
{
  /**
  * Muestra una lista de los hoteles
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todos los hoteles

      $hts = hotel::get();
       // llamada a la vista index.blade.php en resources/views/hotel
    return view('hotel.index')->with('hts', $hts);
  }

    public function show($id)
{   // Devolverá las habitaciones de un hotel
      $hbt = DB::table('hotel_habitacion')
            ->join('hotel', 'hotel.id', '=', 'hotel_habitacion.id_hotel')
            ->join('habitacion', 'habitacion.id', '=', 'hotel_habitacion.id_habitacion')
            ->where('hotel_habitacion.id_hotel', '=', $id)
            ->get();
        
             // llamada a la vista index.blade.php en resources/views/hotel/habitacion
  return View('hotel.habitacion.index')->with('hbt', $hbt);;
}

    public function tax($id_hotel, $id_habitacion)
{
  // Devolverá los extras de una habitacion de un hotel y habitacion determinados
      $ext = DB::table('hotel_habitacion')
            ->join('hotel', 'hotel.id', '=', 'hotel_habitacion.id_hotel')
            ->join('habitacion', 'habitacion.id', '=', 'hotel_habitacion.id_habitacion')
            ->join('extra_habitacion', 'extra_habitacion.id_habitacion', '=', 'habitacion.id')
            ->join('extra', 'extra.id', '=', 'extra_habitacion.id_extra')
            ->where('hotel_habitacion.id_hotel', '=', $id_hotel)
            ->where('hotel_habitacion.id_habitacion', '=', $id_habitacion)
            ->select('extra.*','extra_habitacion.*')
            ->orderBy('extra_habitacion.pvp', 'desc')
            ->get();
        
 // llamada a la vista index.blade.php en resources/views/hotel/habitacion/extra
  return View('hotel.habitacion.extra.index')->with('ext', $ext);;
}

}
