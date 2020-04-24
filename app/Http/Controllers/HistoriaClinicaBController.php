<?php

namespace App\Http\Controllers;

use App\Models\Cie10;
use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Seguridad\Usuario;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoriaClinicaBController extends Controller
{
    public function index($id)
    {
        $eventos = Evento::ConsultaHistoriasClinicas($id)->get();      
        $identificacion = DatosIdentificacion::findOrFail($id);         
        return view('historiasCB.index', compact('eventos', 'identificacion'));
    }

    public function create($id)
    {      
        $cie10 = Cie10::orderBy('id')->pluck('codigo', 'descripcion')->toArray();        
        $identificacion = DatosIdentificacion::findOrFail($id);    
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        return view('historiasCB.create', compact('identificacion', 'edad', 'cie10'));
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
        $historiaClinica = $evento->historiaClinicaB()->create([
            'nombreAcompañante'=>request('nombreAcompañante'),
            'parentescoAcompañante'=>request('parentescoAcompañante'),
            'fechaConsulta'=>request('fechaConsulta'),
            'horaConsulta'=>request('horaConsulta'),
            'edadActual'=>request('edadActual'),
            'motivoConsulta'=>request('motivoConsulta'),
            'enfermedadActual'=>request('enfermedadActual'),
        ]);
        $antesedente = $evento->antecedente()->create([
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
        $revisionSistema = $evento->revisionSistema()->create([
            'cabeza'=>request('cabeza'),
            'organosSentidos'=>request('organosSentidos'),
            'cardioPulmonar'=>request('cardioPulmonar'),
            'digestivo'=>request('digestivo'),
            'urinario'=>request('urinario'),
            'genital'=>request('genital'),
            'miembros'=>request('miembros'),
            'pielAnexosRS'=>request('pielAnexosRS'),
            'psiquismo'=>request('psiquismo'),
            'endocrinologico'=>request('endocrinologico'),
        ]);
        $examenFisico = $evento->examenFisico()->create([
            'peso'=>request('peso'),
            'talla'=>request('talla'),
            'temperatura'=>request('temperatura'),
            'presionArterial'=>request('presionArterial'),
            'frecuenciaCardiaca'=>request('frecuenciaCardiaca'),
            'frecuenciaRespiratoria'=>request('frecuenciaRespiratoria'),
            'saturaciónO2'=>request('saturaciónO2'),
            'aspectoGeneral'=>request('aspectoGeneral'),
            'otorrinolaringologico'=>request('otorrinolaringologico'),
            'cuello'=>request('cuello'),
            'cardioPulmonar'=>request('cardioPulmonar'),
            'abdomen'=>request('abdomen'),
            'genitales'=>request('genitales'),
            'miembros'=>request('miembros'),
            'pielAnexosEF'=>request('pielAnexosEF'),
            'neurológico'=>request('neurológico'),
            'otros'=>request('otros'),
        ]);
        $consulta = $evento->consulta()->create([
            'dxPrincipal'=>request('dxPrincipal'),
            'tipoDiagnostico'=>request('tipoDiagnostico'),
            'dxRelacionado1'=>request('dxRelacionado1'),
            'dxRelacionado2'=>request('dxRelacionado2'),
            'dxRelacionado3'=>request('dxRelacionado3'),
            'tipoConsulta'=>request('tipoConsulta'),
            'finalidadConsulta'=>request('finalidadConsulta'),
            'causaExterna'=>request('causaExterna'),
            'valorConsulta'=>request('valorConsulta'),
            'tipoUsuario'=>request('tipoUsuario'),
            'observacionAnálisis'=>request('observacionAnálisis'),
            'plan'=>request('plan'),
        ]);
        $archivo = $evento->archivoAdjunto()->create([
            'url' => $request->file('url')->store('public/ArchivosAnexos')
        ]);
        return redirect()->route('historiaC.index',  ['id'=>$id]);        
    }

    public function show($id, $idh)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);    
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $eventos = Evento::ConsultaHistoriasClinicas($id)->get();
        return view('historiasCB.show', compact('edad'));
    }
    public function crearPDF(){

        $pdf = PDF::loadView('seguridad.index');
        return $pdf->stream();
    }


}
