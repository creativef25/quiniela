<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiniela extends Model
{
    public $table = 'quiniela';

    public $fillable = ['resultado1', 'resultado2', 'resultado3', 'resultado4', 'resultado5', 'resultado6', 'resultado7', 'resultado8', 'resultado9', 'id_user', 'created_at', 'updated_at'];
}
