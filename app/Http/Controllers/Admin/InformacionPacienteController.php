<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionInfoPaciente;
use App\Models\Admin\Paciente;
use App\Models\Admin\Rol;
use App\Models\DatosDemograficos;
use App\Models\DatosIdentificacion;
use Illuminate\Http\Request;

class InformacionPacienteController extends Controller
{
    public function index()
    {
        $identificacion = DatosIdentificacion::orderBy('id')->get();
        return view('admin.paciente.index', compact('identificacion'));
    }

    public function create()
    {
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        return view('admin.paciente.create', compact('rols'));         
    }

    public function store()
    {
       /*  $identificacion = DatosIdentificacion::create($request -> all()); */
        /*$identificacion->datosDemograficos()->create($request->all()); */
        /* DatosDemograficos::create([$request -> all(),  'identificacion_id' => $identificacion->id]); */
       /*  $request->createDatos(); */
       
        $identificacion = DatosIdentificacion::create([
            'primerNombre' => request('primerNombre'),
            'segundoNombre' => request('segundoNombre'),
            'primerApellido' => request('primerApellido'),
            'segundoApellido' => request('segundoApellido'),
            'tipoDocumento' => request('tipoDocumento'),
            'numeroIdentificacion' => request('numeroIdentificacion'),
            'sexo' => request('sexo'),
            'fechaNacimiento' => request('fechaNacimiento'),
           
            ]);
        $identificacion-> datosDemograficos()->create([
            'paisResidencia' => request('paisResidencia'),
            'departamentoResidencia' => request('departamentoResidencia'),
            'ciudadResidencia' => request('ciudadResidencia'),
            'localidadResidencia' => request('localidadResidencia'),
            'direccionResidencia' => request('direccionResidencia'),
            'zonaResidencia' => request('zonaResidencia'),
            'paisNacimiento' => request('paisNacimiento'),
            'ciudadNacimiento' => request('ciudadNacimiento'),
            'estadoCivil' => request('estadoCivil'),
            'escolaridad' => request('escolaridad'),
            'ocupacion' => request('ocupacion'),
            'credoReligioso' => request('credoReligioso')
        ]);
        $identificacion->datosAfiliacion()->create([
            'tipoVinculacion'=>request('tipoVinculacion'),
            'aseguradora'=>request('aseguradora'), 
            'responsableMedico'=>request('responsableMedico'),
            'parentescoResponsable'=>request('parentescoResponsable'),
            'telefonoResponsable'=>request('telefonoResponsable'),
        ]);

        return redirect('admin/paciente') ->with('mensaje', 'Paciente creado con exito'); 
    }

    public function show($id)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);
        return view('admin.paciente.show', compact('identificacion'));
    }

    public function edit($id)
    {
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $data = DatosIdentificacion::findOrFail ($id);
        return view('admin.paciente.edit', compact('data', 'rols'));
    }

    public function update(Request $request, $id)
    {
        DatosIdentificacion::findOrFail($id)->update($request->all());
        return redirect('admin/paciente') ->with('mensaje', 'Rol actualizado con exito');
    }
}
