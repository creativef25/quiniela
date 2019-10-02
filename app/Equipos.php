<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    public $table = 'equipos';

    public function partidos(){
      return $this->hasOne('App\Partidos', 'id');
    }
}
