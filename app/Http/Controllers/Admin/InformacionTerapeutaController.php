<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DatosIdentificacion;
use Illuminate\Http\Request;

class InformacionTerapeutaController extends Controller
{
    public function index()
    {
        $identificacion = DatosIdentificacion::orderBy('id')->get();
        return view('admin.terapeuta.index', compact('identificacion'));
    }

    public function create()
    {
        return view('admin.paciente.create'); 
    }

    public function store(Request $request)
    {
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
    }

    public function show($id)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);
        return view('admin.paciente.show', compact('identificacion'));
    }

    public function edit($id)
    {
        $data = DatosIdentificacion::findOrFail ($id);
        return view('admin.paciente.edit', compact('data', 'rols'));
    }
    
    public function update(Request $request, $id)
    {
        DatosIdentificacion::findOrFail($id)->update($request->all());
        return redirect('admin/paciente') ->with('mensaje', 'Rol actualizado con exito');
    }
}
