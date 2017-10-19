<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{

    //
    // Nombre de la tabla de la base de datos.
  protected $table='hotel';
 
  // asignamos el id de la tabla
  protected $primaryKey = 'id';
 
  // Definimos los campos a capturar
  protected $fillable =  array('id', 'nombre', 'descripcion', 'tlfno', 'fax', 'direccion',  'longitud', 'latitud');
 
}
