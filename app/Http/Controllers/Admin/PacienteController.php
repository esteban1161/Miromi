<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $datos = Paciente::orderBy('id')->get();
        return view('admin.paciente.index', compact('datos'));
    }

    public function create()
    {
        return view('admin.paciente.create');         
    }

    public function store(Request $request)
    {
        Paciente::create($request -> all());
        return redirect('admin/paciente') ->with('mensaje', 'Paciente creado con exito');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Paciente::findOrFail ($id);
        return view('admin.paciente.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Paciente::findOrFail($id)->update($request->all());
        return redirect('admin/paciente') ->with('mensaje', 'Rol actualizado con exito');
    }

    public function destroy($id)
    {
        //
    }
}
