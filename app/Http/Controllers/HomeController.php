<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*public function index()
    {
        return view('home');
    }*/

    public function index(Request $request)
    {
      $hola = $request->user()->authorizeRoles(['user', 'admin']);
      //dd($hola->name);
      if ($hola->name == 'admin') {
        return redirect()->route('admin');
      }else{
        return redirect()->route('perfil');
      }
    }
}
