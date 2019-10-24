<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partidos;
use App\Equipos;
use App\Quiniela;

class QuinielaController extends Controller
{
    public function indexPrincipal(){
      $part = Partidos::all();
      $equipos = Equipos::orderBy('puntos', 'desc')->orderBy('diferencia_goles', 'desc')->get();
      return view('quiniela.index', compact('part','equipos'));
    }

    public function quiniela(Request $request){

      $quinie = new Quiniela();
      $quinie->resultado1 = $request->resultado0;
      $quinie->resultado2 = $request->resultado1;
      $quinie->resultado3 = 0;//$request->resultado2;
      $quinie->resultado4 = 0;//$request->resultado3;
      $quinie->resultado5 = 0;//$request->resultado4;
      $quinie->resultado6 = 0;//$request->resultado5;
      $quinie->resultado7 = 0;//$request->resultado6;
      $quinie->resultado8 = 0;//$request->resultado7;
      $quinie->resultado9 = 0;//$request->resultado8;
      $quinie->id_user = 1;
      $quinie->updated_at = date('Y-m-d');
      $quinie->created_at = date('Y-m-d');

      $quinie->save();
    }

    public function perfil(){
      return view('quiniela.perfil');
    }

    public function admin(){
      return view('admin');
    }


}
