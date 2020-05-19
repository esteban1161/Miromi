<?php

namespace App\Http\Controllers;

use App\Models\Cie10;
use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Seguridad\Usuario;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoriaClinicaBController extends Controller
{
    public function create($id)
    {      
        $cie10 = Cie10::orderBy('id')->get();        
        $identificacion = DatosIdentificacion::findOrFail($id);    
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $date = Carbon::now();
        $time = Carbon::now();
        $date = $date->format('Y-m-d');
        $time = $time->format('H:i:s');
        return view('historiasCB.create', compact('identificacion', 'edad', 'cie10', 'date', 'time'));
    }

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
        $evento->historiaClinicaB()->create([
            'nombreAcompañante'=>request('nombreAcompañante'),
            'parentescoAcompañante'=>request('parentescoAcompañante'),
            'fechaConsulta'=>request('fechaConsulta'),
            'horaConsulta'=>request('horaConsulta'),
            'edadActual'=>request('edadActual'),
            'motivoConsulta'=>request('motivoConsulta'),
            'enfermedadActual'=>request('enfermedadActual'),
        ]);
        $evento->antecedentes()->create([
            'patológicos'=>request('patológicos'),
            'quirúrgicos'=>request('quirúrgicos'),
            'farmacológicos'=>request('farmacológicos'),
            'toxicológicos'=>request('toxicológicos'),
            'familiares'=>request('familiares'),
            'traumáticos'=>request('traumáticos'),
            'hospitalarios'=>request('hospitalarios'),
            'inmunológicosVacunas'=>request('inmunológicosVacunas'),
            'alérgicos'=>request('alérgicos'),
            'tratamientoOdontológico'=>request('tratamientoOdontológico'),
            'formulaObstétrica'=>request('formulaObstétrica'),
            'fechaUltimaMenstruacion'=>request('fechaUltimaMenstruacion'),
            'menarquia'=>request('menarquia'),
            'menopausia'=>request('menopausia'),
            'planificación'=>request('planificación'), 
        ]);
        $evento->revisionSistema()->create([
            'cabeza'=>request('cabeza'),            
            'cardioPulmonarRS'=>request('cardioPulmonarRS'),
            'urinario'=>request('urinario'),
            'extremidadesRS'=>request('extremidadesRS'),
            'psiquismo'=>request('psiquismo'),
            'organosSentidos'=>request('organosSentidos'),
            'digestivo'=>request('digestivo'),
            'genital'=>request('genital'),
            'pielAnexosRS'=>request('pielAnexosRS'),
            'endocrinologico'=>request('endocrinologico'),
        ]);
        $evento->examenFisico()->create([
            'presionArterialSistolica'=>request('presionArterialSistolica'),
            'presionArterialDiastolica'=>request('presionArterialDiastolica'),
            'frecuenciaCardiaca'=>request('frecuenciaCardiaca'),
            'frecuenciaRespiratoria'=>request('frecuenciaRespiratoria'),
            'temperatura'=>request('temperatura'),
            'saturaciónO2'=>request('saturaciónO2'),
            'peso'=>request('peso'),
            'talla'=>request('talla'),
            'masaCorporal'=>request('masaCorporal'),
            'aspectoGeneral'=>request('aspectoGeneral'),
            'cuello'=>request('cuello'),
            'abdomen'=>request('abdomen'),
            'pielAnexosEF'=>request('pielAnexosEF'),
            'neurológico'=>request('neurológico'),
            'otorrinolaringologico'=>request('otorrinolaringologico'),
            'cardioPulmonarEF'=>request('cardioPulmonarEF'),
            'extremidadesEF'=>request('extremidadesEF'),
            'genitales'=>request('genitales'),
            'otros'=>request('otros'),
        ]);
        $evento->consulta()->create([
            'observacionAnálisis'=>request('observacionAnálisis'),
            'plan'=>request('plan'),
            'finalidadConsulta'=>request('finalidadConsulta'),
            'causaExterna'=>request('causaExterna'),
            'valorConsulta'=>request('valorConsulta'),
            'codigoConsulta'=>request('codigoConsulta'),
            'tipoUsuario'=>request('tipoUsuario'),
        ]);

        $diagnostico = $request->input('cie10s_id');
        $diagnostico2 = $request->input('tipoDiagnostico');
        for($i = 0; $i < count($diagnostico); $i ++) {
            $evento->diagnosticos()->create([
                'cie10s_id' => $diagnostico[$i],
                'tipoDiagnostico' => $diagnostico2[$i],                
            ]);  
        }  


        /* if($request->hasFile('url')){
            $evento->archivosAdjuntos()->create([
               'url' => $request->file('url')->store('public/ArchivosAnexos')
            ]);
        } */
        return redirect()->route('listaAtenciones.index',  ['id'=>$id]);        
    }

    public function show($id, $idh)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);    
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $eventos = Evento::findOrFail($idh);        
        return view('historiasCB.show', compact('edad', 'eventos', 'identificacion', 'data'));
    }
    
    public function crearPDF(){

        $pdf = PDF::loadView('seguridad.index');
        return $pdf->stream();
    }


}
