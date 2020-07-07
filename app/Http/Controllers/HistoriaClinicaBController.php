<?php

namespace App\Http\Controllers;

use App\Models\Cie10;
use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Formula;
use App\Models\Formularios;
use App\Models\Recomendaciones;
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

        switch ($request->get('subirBoton')) {
            case 'guardar':
                $evento->estado = true;
                $evento->save();
                break;
            
            case 'borrador':
                $evento->estado = false;
                $evento->save();
                break;
        }
        
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
        
        $formulas1 = $request->input('prescripcion');
        $formulas2 = $request->input('cantidad');
        $formulas3 = $request->input('observaciones');
        for($i = 0; $i< count($formulas1); $i++){
            $evento->formula()->create([
                'prescripcion' => $formulas1[$i],
                'cantidad' => $formulas2[$i],
                'observaciones' => $formulas3[$i],
            ]);
        }

        $recomendacion1 = $request->input('recomendacion');
        $recomendacion2 = $request->input('descripcion');
        for($i = 0; $i < count($recomendacion1); $i ++){
            $evento->recomendacion()->create([
                'recomendacion' => $recomendacion1[$i],
                'descripcion' => $recomendacion2[$i],
            ]);
        }

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
        $diagnostico3 = $request->input('observacionesDx');
        
        for($i = 0; $i < count($diagnostico); $i ++) {
            $evento->diagnosticos()->create([
                'cie10s_id' => $diagnostico[$i],
                'tipoDiagnostico' => $diagnostico2[$i],    
                'observacionesDx' => $diagnostico3[$i],   
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

    public function edit($id, $idh)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);    
        $eventos = Evento::findOrFail($idh);        
        $terapeuta = Evento::ConsultaTerapeuta()->first();
        $cie10 = Cie10::orderBy('id')->get();        
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $date = Carbon::now();
        $time = Carbon::now();
        $date = $date->format('Y-m-d');
        $time = $time->format('H:i:s');
        return view('historiasCB.edit', compact('identificacion', 'edad', 'cie10', 'date', 'time', 'terapeuta', 'eventos'));
    }

    public function update(Request $request, $id, $idh){

        $identificacion = DatosIdentificacion::findOrFail($id);    
       
        $evento = Evento::findOrFail($idh);       
        
        switch ($request->get('subirBoton')) {
            case 'guardar':
                $evento->estado = true;
                $evento->save();
                break;
            
            case 'borrador':
                $evento->estado = false;
                $evento->save();
                break;
        }

        $evento->formatosBase()->update([
            'nombreAcompañante'=>request('nombreAcompañante'),
            'parentescoAcompañante'=>request('parentescoAcompañante'),
            'fechaConsulta'=>request('fechaConsulta'),
            'horaConsulta'=>request('horaConsulta'),
            'edadActual'=>request('edadActual'),
            'consultorio'=>request('consultorio'),
            'motivoConsulta'=>request('motivoConsulta'),
            'enfermedadActual'=>request('enfermedadActual'),
        ]);
        $evento->antecedentes()->update([
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
        $evento->revisionSistema()->update([
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
        $evento->examenFisico()->update([
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
            'otrosEF'=>request('otrosEF'),
        ]);
        
        $formulas1 = $request->input('prescripcion');
        $formulas2 = $request->input('cantidad');
        $formulas3 = $request->input('observaciones');
        $evento->formula()->delete();
        for($i = 0; $i< count($formulas1); $i++){
            $evento->formula()->create([
                'prescripcion' => $formulas1[$i],
                'cantidad' => $formulas2[$i],
                'observaciones' => $formulas3[$i],
            ]);
        }

        $recomendacion1 = $request->input('recomendacion');
        $recomendacion2 = $request->input('descripcion');
        $evento->recomendacion()->delete();
        for($i = 0; $i < count($recomendacion1); $i ++){
            $evento->recomendacion()->create([
                'recomendacion' => $recomendacion1[$i],
                'descripcion' => $recomendacion2[$i],
            ]);
        }

        $evento->consulta()->update([
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
        $diagnostico3 = $request->input('observacionesDx');
        $evento->diagnosticos()->delete();
        for($i = 0; $i < count($diagnostico); $i ++) {
            $evento->diagnosticos()->create([
                'cie10s_id' => $diagnostico[$i],
                'tipoDiagnostico' => $diagnostico2[$i],    
                'observacionesDx' => $diagnostico3[$i],   
            ]);  
        }  

        /* $adjunto = $request->file('url');
        for($i = 0; $i < count($adjunto); $i ++){

            if($request->hasFile('url')){

                $nombre = $adjunto[$i]->getClientOriginalName();   

                $evento->archivosAdjuntos()->update([
                    'nombre' => $nombre,
                    'url' => $adjunto[$i]->store('public/ArchivosAnexos'),
                ]);
                Storage::disk('public')->put("ArchivosAnexos", $adjunto[$i]);

            }          
        }  */
        
        return redirect()->route('listaAtenciones.index',  ['id'=>$id]);        
    }
    
    
    public function crearPDF($id, $idh){

        $identificacion = DatosIdentificacion::findOrFail($id);    
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $eventos = Evento::findOrFail($idh);
        $pdf = PDF::loadView('historiasCB.show', compact('edad', 'eventos', 'identificacion'));
        return $pdf->stream();       
    }

    public function selectFormula()
    {
        $formula = Formula::orderBy('id')->get();
        $formulaJ = json_encode($formula);
        return $formulaJ;

    }

    public function selectRecomendacion()
    {
        $recomendacion = Recomendaciones::orderBy('id')->get();
        $recomendacionJ = json_encode($recomendacion);
        return $recomendacionJ;
    }


}
