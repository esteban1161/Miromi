<?php

namespace App\Http\Controllers;

use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Formularios;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PerfilProcedimientosController extends Controller
{    
    public function index()
    {
        $terapeutas = Evento::ConsultaTerapeutas()->get();
        return view('procedimientoEnfermeria.index', compact('terapeutas'));
    }
   
    public function create($id)
    {
        $terapeuta = Evento::ConsultaTerapeuta()->first();
        $identificacion = DatosIdentificacion::findOrFail($id);    
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $date = Carbon::now();
        $time = Carbon::now();
        $date = $date->format('Y-m-d');
        $time = $time->format('H:i:s');
        return view('procedimientoEnfermeria.create', compact('identificacion', 'edad', 'cie10', 'date', 'time', 'terapeuta'));
    }

    public function store(Request $request, $id)
    {
        $rol = 2;   //Hacer la consulta para encontrar el rol

        $formulario = Formularios::findOrFail(6);

        $evento = $formulario->eventos()->create([
            'usuario_id' => auth()->id(),
            'rol_id' => $rol,
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
        
        $evento->procedimientosEnfermeria()->create([
            'fechaProcedimiento' => $request['fechaProcedimiento'],
            'nombreProcedimiento' => $request['nombreProcedimiento'],
            'descripcionProcedimiento' => $request['descripcionProcedimiento'],
            'observaciones' => $request['observaciones'],
            'complicaciones' => $request['complicaciones'],
            'insumos' => $request['insumos'],
        ]);

        $evento->examenFisico()->create([
            'presionArterialSistolica'=>request('presionArterialSistolica'),
            'presionArterialDiastolica'=>request('presionArterialDiastolica'),
            'frecuenciaCardiaca'=>request('frecuenciaCardiaca'),
            'frecuenciaRespiratoria'=>request('frecuenciaRespiratoria'),
            'temperatura'=>request('temperatura'),
            'saturaciónO2'=>request('saturaciónO2'),
        ]);

        return redirect()->route('listaAtenciones.index',  ['id'=>$id]);
    }
    
    public function show(Request $request)
    {
        $id = $request->input('terapeuta');
        $eventos = Evento::InfoTerapeuta($id)->first();
        $eventos2 = Evento::ConsultaProcedimientosEnfermeria($id)->get();
        return view('procedimientoEnfermeria.show', compact('eventos', 'eventos2'));
    }
  
   
}
