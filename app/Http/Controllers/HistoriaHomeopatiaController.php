<?php

namespace App\Http\Controllers;

use App\Models\Cie10;
use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Formularios;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HistoriaHomeopatiaController extends Controller
{   
    public function create($id)
    {
        $eventos = [0];
        
        $terapeuta = Evento::ConsultaTerapeuta()->first();
        $identificacion = DatosIdentificacion::findOrFail($id);    
        $cie10 = Cie10::orderBy('id')->get();        
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $date = Carbon::now();
        $time = Carbon::now();
        $date = $date->format('Y-m-d');
        $time = $time->format('H:i:s');
        
        return view('historiaHomeopatia.create', compact('identificacion', 'terapeuta', 'edad', 'cie10', 'date', 'time', 'cie10', 'eventos'));
    }

    public function store(Request $request, $id)
    {
        $idUser = auth()->id();
        $rol = 2;

        $formulario = Formularios::findOrFail(5);

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
            'nombreAcompañante' => request('nombreAcompañante'),
            'parentescoAcompañante' => ('parentescoAcompañante'),
            'fechaConsulta' => request('fechaConsulta'),
            'horaConsulta' => request('horaConsulta'),
            'edadActual' => request('edadActual'),
            'consultorio' => request('consultorio'),
            'motivoConsulta' => request('motivoConsulta'),
            'enfermedadActual' =>request('enfermedadActual'),
            'personalizado1' => request('sintomasSecundarios'),
            'paraclinicos' => request('paraclinicos'),
            'tratamientoActual' => request('tratamientoActual'),
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

        $evento->sintomasGenerales()->create([
            'sueno' => request('sueno'),
            'sedApetito' => request('sedApetito'),
            'temperatura' => request('temperatura'),
            'vitalidad' => request('vitalidad'),
        ]);

        $evento->sintomasMentales()->create([
            'memoria' => request('memoria'),
            'emociones' => request('emociones'),
            'relacionamiento' => request('relacionamiento'),
            'comportamiento' => request('comportamiento'),
            'otrosMentales' => request('otrosMentales')
        ]);

        $evento->entornoSocial()->create([
            'convivencia' => request('convivencia'),
            'cronologia' => request('cronologia'),
            'recreacion' => request('recreacion'),
            'cuidadores' => request('cuidadores'),
            'hermanos' => request('hermanos'),
            'biopatografia' => request('biopatografia')
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
            'otrosEF'=>request('otrosEF'),
        ]);
        
        $formulas1 = $request->input('prescripcion');
        $formulas2 = $request->input('cantidad');
        $formulas3 = $request->input('observaciones');
        for($i = 0; $i< count($formulas1); $i++){
            $evento->formulas()->create([
                'prescripcion' => $formulas1[$i],
                'cantidad' => $formulas2[$i],
                'observaciones' => $formulas3[$i],
            ]);
        }

        $recomendacion1 = $request->input('recomendacion');
        $recomendacion2 = $request->input('descripcion');
        for($i = 0; $i < count($recomendacion1); $i ++){
            $evento->recomendaciones()->create([
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

        $diagnostico = $request->input('cie10_Desc');
        $diagnostico2 = $request->input('cie10_cod');
        $diagnostico3 = $request->input('tipoDiagnostico');
        $diagnostico4 = $request->input('observacionesDx');
        for($i = 0; $i < count($diagnostico); $i ++) {
            $evento->diagnosticos()->create([
                'cie10_Desc' => $diagnostico[$i],         
                'cie10_cod' => $diagnostico2[$i],
                'tipoDiagnostico' => $diagnostico3[$i],    
                'observacionesDx' => $diagnostico4[$i],   
            ]);  
        }  

        if($request->hasFile('url')){
            $adjunto = $request->file('url');
            
            for($i = 0; $i < count($adjunto); $i ++){
                $nombre = $adjunto[$i]->getClientOriginalName();   

                $evento->archivosAdjuntos()->create([
                    'nombre' => $nombre,
                    'url' => $adjunto[$i]->storeAs('public/ArchivosAnexos', $nombre),
                ]);
                Storage::disk('public')->put("ArchivosAnexos", $adjunto[$i]);

            }          
        } 
        return redirect()->route('listaAtenciones.index',  ['id'=>$id]);        

        
    }

    public function show($id, $idh)
    {
        //
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
        return view('historiaHomeopatia.edit', compact('identificacion', 'edad', 'cie10', 'date', 'time', 'terapeuta', 'eventos'));
    }

    public function update(Request $request, $id, $idh)
    {
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
            'nombreAcompañante' => request('nombreAcompañante'),
            'parentescoAcompañante' => ('parentescoAcompañante'),
            'fechaConsulta' => request('fechaConsulta'),
            'horaConsulta' => request('horaConsulta'),
            'edadActual' => request('edadActual'),
            'consultorio' => request('consultorio'),
            'motivoConsulta' => request('motivoConsulta'),
            'enfermedadActual' =>request('enfermedadActual'),
            'personalizado1' => request('sintomasSecundarios'),
            'paraclinicos' => request('paraclinicos'),
            'tratamientoActual' => request('tratamientoActual'),
        ]);

        $evento->revisionSistema()->update([
            'cabeza' => request('cabeza'),            
            'cardioPulmonarRS' => request('cardioPulmonarRS'),
            'urinario' => request('urinario'),
            'extremidadesRS' => request('extremidadesRS'),
            'psiquismo' => request('psiquismo'),
            'organosSentidos' => request('organosSentidos'),
            'digestivo' => request('digestivo'),
            'genital' => request('genital'),
            'pielAnexosRS' => request('pielAnexosRS'),
            'endocrinologico' => request('endocrinologico'),
        ]);

        $evento->sintomasGenerales()->update([
            'sueno' => request('sueno'),
            'sedApetito' => request('sedApetito'),
            'temperatura' => request('temperatura'),
            'vitalidad' => request('vitalidad'),
        ]);

        $evento->sintomasMentales()->update([
            'memoria' => request('memoria'),
            'emociones' => request('emociones'),
            'relacionamiento' => request('relacionamiento'),
            'comportamiento' => request('comportamiento'),
            'otrosMentales' => request('otrosMentales')
        ]);

        $evento->entornoSocial()->update([
            'convivencia' => request('convivencia'),
            'cronologia' => request('cronologia'),
            'recreacion' => request('recreacion'),
            'cuidadores' => request('cuidadores'),
            'hermanos' => request('hermanos'),
            'biopatografia' => request('biopatografia')
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
            $evento->formulas()->create([
                'prescripcion' => $formulas1[$i],
                'cantidad' => $formulas2[$i],
                'observaciones' => $formulas3[$i],
            ]);
        }

        $recomendacion1 = $request->input('recomendacion');
        $recomendacion2 = $request->input('descripcion');
        $evento->recomendaciones()->delete();

        for($i = 0; $i < count($recomendacion1); $i ++){
            $evento->recomendaciones()->create([
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

        $diagnostico = $request->input('cie10_Desc');
        $diagnostico2 = $request->input('cie10_cod');
        $diagnostico3 = $request->input('tipoDiagnostico');
        $diagnostico4 = $request->input('observacionesDx');
        $evento->diagnosticos()->delete();
        for($i = 0; $i < count($diagnostico); $i ++) {
            $evento->diagnosticos()->create([
                'cie10_Desc' => $diagnostico[$i],         
                'cie10_cod' => $diagnostico2[$i],
                'tipoDiagnostico' => $diagnostico3[$i],    
                'observacionesDx' => $diagnostico4[$i],   
            ]);  
        }  

        if($request->hasFile('url')){
            $adjunto = $request->file('url');
            
            for($i = 0; $i < count($adjunto); $i ++){
                $nombre = $adjunto[$i]->getClientOriginalName();   

                $evento->archivosAdjuntos()->create([
                    'nombre' => $nombre,
                    'url' => $adjunto[$i]->storeAs('public/ArchivosAnexos', $nombre),
                ]);
                Storage::disk('public')->put("ArchivosAnexos", $adjunto[$i]);

            }          
        } 

        return redirect()->route('listaAtenciones.index',  ['id'=>$id]);        

    }

    public function destroy($id, $idh)
    {
        $evento = Evento::findOrFail($idh);
        $evento->formatosBase()->delete();
        $evento->revisionSistema()->delete();
        $evento->sintomasGenerales()->delete();
        $evento->sintomasMentales()->delete();
        $evento->entornoSocial()->delete();
        $evento->antecedentes()->delete();
        $evento->examenFisico()->delete();
        $evento->formula()->delete();
        $evento->recomendaciones()->delete();
        $evento->consulta()->delete();
        $evento->diagnosticos()->delete();        
        $evento->delete();
        return redirect()->route('listaAtenciones.index',  ['id'=>$id]);
    }
}
