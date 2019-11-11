<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Partidos;
use App\Equipos;
use App\Quiniela;
use App\Datos;

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
      $datos = Datos::where('id_user', Auth::id())->first();
      return view('quiniela.perfil', compact('datos'));
    }

    public function admin(){
      return view('admin');
    }

    public function datos(){
      $datos = Datos::where('id_user', Auth::id())->first();
      return view('quiniela.datos', compact('datos'));
    }

    public function guardarDatos(Request $request){

      $dato = new Datos();
      $dato->nombre = $request->nombre;
      $dato->apePaterno = $request->apePaterno;
      $dato->apeMaterno = $request->apeMaterno;
      $dato->edad = $request->edad;
      $dato->calle = $request->calle;
      $dato->alcaldia = $request->alcaldia;
      $dato->ciudad = $request->ciudad;
      $dato->CP = $request->cp;
      $dato->telefono = $request->telefono;
      $dato->id_user = Auth::id();
      $dato->updated_at = date('Y-m-d');
      $dato->created_at = date('Y-m-d');
      $dato->save();

      return redirect()->route('perfil');

    }


}
