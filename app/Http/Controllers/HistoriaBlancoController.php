<?php

namespace App\Http\Controllers;

use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Formularios;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoriaBlancoController extends Controller
{
    public function create($id)
    {
        $terapeuta = Evento::ConsultaTerapeuta()->first();
        $identificacion = DatosIdentificacion::findOrFail($id);
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $date = Carbon::now();
        $time = Carbon::now();
        $date = $date->format('Y-m-d');
        $time = $time->format('H:i:s');
        return view('historiaClinicaBlanco.create', compact('identificacion', 'edad', 'cie10', 'date', 'time', 'terapeuta'));
    }

    public function store(Request $request, $id)
    {
        $idUser = auth()->id();
        $rol = 2;

        $formulario = Formularios::findOrFail(4);

        $evento = $formulario->eventos()->create([
            'usuario_id' => $idUser,
            'rol_id'=>$rol,
            'identificacion_id'=> $id,
        ]);

        $evento->formatosBase()->create([
            'nombreAcompañante'=>request('nombreAcompañante'),
            'parentescoAcompañante'=>request('parentescoAcompañante'),
            'fechaConsulta'=>request('fechaConsulta'),
            'horaConsulta'=>request('horaConsulta'),
            'edadActual'=>request('edadActual'),
            'consultorio'=>request('consultorio'),
            'motivoConsulta'=>request('motivoConsulta'),
            'enfermedadActual'=>request('enfermedadActual'),
        ]);

        $evento->historiaBlanco()->create([
            'formatoBlanco' => request('formatoBlanco'),
        ]);

        return redirect()->route('listaAtenciones.index',  ['id'=>$id]);
    }

    public function show($id, $idh)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);            
        $eventos = Evento::findOrFail($idh);
        return view('historiaClinicaBlanco.show', compact('eventos', 'identificacion'));
    }
    
}
