<?php

namespace App\Http\Controllers;

use App\Models\Cie10;
use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Formularios;
use App\Models\Seguridad\Usuario;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HistoriaClinicaBController extends Controller
{
    public function create($id)
    {      
        $terapeuta = Evento::ConsultaTerapeuta()->first();
        $cie10 = Cie10::orderBy('id')->get();        
        $identificacion = DatosIdentificacion::findOrFail($id);    
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $date = Carbon::now();
        $time = Carbon::now();
        $date = $date->format('Y-m-d');
        $time = $time->format('H:i:s');
        return view('historiasCB.create', compact('identificacion', 'edad', 'cie10', 'date', 'time', 'terapeuta'));
    }

    public function store(Request $request, $id)
    {
        $idUser = auth()->id();
        $rol = 2;

        $formulario = Formularios::findOrFail(3);

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

        $adjunto = $request->file('url');
        for($i = 0; $i < count($adjunto); $i ++){

            if($request->hasFile('url')){

                $nombre = $adjunto[$i]->getClientOriginalName();   

                $evento->archivosAdjuntos()->create([
                    'nombre' => $nombre,
                    'url' => $adjunto[$i]->store('public/ArchivosAnexos'),
                ]);
                Storage::disk('public')->put("ArchivosAnexos", $adjunto[$i]);

            }          
        } 
        
        return redirect()->route('listaAtenciones.index',  ['id'=>$id]);        
    }

    public function show($id, $idh)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);    
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $eventos = Evento::findOrFail($idh);        
        return view('historiasCB.show', compact('edad', 'eventos', 'identificacion'));
    }
    
    public function crearPDF($id, $idh){

        $identificacion = DatosIdentificacion::findOrFail($id);    
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $eventos = Evento::findOrFail($idh);
        $pdf = PDF::loadView('historiasCB.show', compact('edad', 'eventos', 'identificacion'));
        return $pdf->stream();       
    }


}
