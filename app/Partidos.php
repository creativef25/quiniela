<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Equipos;

class Partidos extends Model
{
    public $table = 'partidos';

    public function equipos($id){
      $equi = Equipos::find($id);
      return $equi->nombre;
    }

    public function imgEqui($id){
      $imgE = Equipos::find($id);
      return $imgE->imagen;
    }
}
