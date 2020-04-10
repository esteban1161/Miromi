<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Seguridad\Usuario;
use Illuminate\Http\Request;

class HistoriaClinicaBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $eventos = Evento::ConsultaHistoriasClinicas($id)->get();                
        return view('historiasCB.index', compact('eventos', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id1 = $id;        
        return view('historiasCB.create', compact('id1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $idUser = auth()->id();
        $rol = 2;

        $evento = Evento::create([
            'usuario_id' => $idUser,
            'rol_id'=>$rol,
            'formulario_id'=>3,           
            'identificacion_id'=> $id,
        ]);
            $historiaClinica = $evento->historiaClinicaB()->create([
            'nombreAcompañante'=>request('nombreAcompañante'),
            'parentescoAcompañante'=>request('parentescoAcompañante'),
            'fechaConsulta'=>request('fechaConsulta'),
            'horaConsulta'=>request('horaConsulta'),
            'edadActual'=>request('edadActual'),
            'enfermedadActual'=>request('enfermedadActual'),
        ]);

        return redirect()->route('historiaC.index',  ['id'=>$id]);        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
