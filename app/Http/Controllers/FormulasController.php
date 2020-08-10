<?php

namespace App\Http\Controllers;

use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Formularios;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FormulasController extends Controller
{
    public function create($id)
    {
        $eventos = [0];
        $terapeuta = Evento::ConsultaTerapeuta()->first();
        $identificacion = DatosIdentificacion::findOrFail($id);
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $date = Carbon::now();
        $time = Carbon::now();
        $date = $date->format('Y-m-d');
        $time = $time->format('H:i:s');
        return view('formulas.create', compact('identificacion', 'edad', 'date', 'time', 'terapeuta', 'eventos'));
    }
    
    public function store(Request $request, $id)
    {
        $idUser = auth()->id();
        $rol = 2;

        $formulario = Formularios::findOrFail(6);

        $evento = $formulario->eventos()->create([
            'usuario_id' => $idUser,
            'rol_id'=>$rol,
            'identificacion_id'=> $id,
        ]);

        $evento->formatosBase()->create([
            'fechaConsulta' => request('fechaConsulta'),
            'horaConsulta' => request('horaConsulta'),
            'edadActual' => request('edadActual'),
            'consultorio' => request('consultorio'),
            'motivoConsulta' => request('motivoConsulta'),
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
        return redirect()->route('listaAtenciones.index',  ['id'=>$id]);

    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id, $idh)
    {
        $eventos = Evento::findOrFail($idh);
        $terapeuta = Evento::ConsultaTerapeuta()->first();
        $identificacion = DatosIdentificacion::findOrFail($id);
        $edad = Carbon::parse($identificacion->fechaNacimiento)->age;
        $date = Carbon::now();
        $time = Carbon::now();
        $date = $date->format('Y-m-d');
        $time = $time->format('H:i:s');
        return view('formulas.edit', compact('identificacion', 'edad', 'date', 'time', 'terapeuta', 'eventos'));
    }
    
    public function update(Request $request, $id, $idh)
    {
        
        $identificacion = DatosIdentificacion::findOrFail($id);    
       
        $evento = Evento::findOrFail($idh);       

        $evento->formatosBase()->update([
            'fechaConsulta'=>request('fechaConsulta'),
            'horaConsulta'=>request('horaConsulta'),
            'edadActual'=>request('edadActual'),
            'consultorio'=>request('consultorio'),
            'motivoConsulta'=>request('motivoConsulta'),
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

        $formulas1 = $request->input('prescripcion');
        $formulas2 = $request->input('cantidad');
        $formulas3 = $request->input('observaciones');
        $evento->formulas()->delete();
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
        return redirect()->route('listaAtenciones.index',  ['id'=>$id]); 

    }
   
    public function destroy($id)
    {
        //
    }
}
