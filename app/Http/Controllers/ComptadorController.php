<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComptadorController extends Controller
{
    public function index()
    {
        $comptador = session('comptador',0);
        return view('comptador',compact('comptador'));
    }

    public function incrementar()
    {
        $comptador = session('comptador',0);
        session()->put('comptador',$comptador+1);

        return redirect('comptador');
    }

    public function decrementar()
    {
        $comptador = session('comptador',0);
        session()->put('comptador',$comptador-1);

        return redirect('comptador');
    }

    public function reset()
    {
        session(['comptador' => 0]);

        return redirect('comptador');
    }
}
