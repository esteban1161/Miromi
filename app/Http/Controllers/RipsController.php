<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $f1 = new \Carbon\Carbon("26-05-2020");       
        $f2 = new \Carbon\Carbon("28-05-2020");
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        return view('rips.index', compact('date'));
    }

    public function fecha(Request $request){
        $f1 = $request->input('fechaInicio');
        $f2 = $request->input('fechaFin');
        $eventos = Evento::EntreFechas($f1, $f2 )->get();        
        return view('rips.fechas', compact('eventos'));
    }
}
