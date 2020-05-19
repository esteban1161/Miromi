<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUsuario;
use App\Models\Admin\Rol;
use App\Models\Formularios;
use App\Models\Seguridad\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $datas = Usuario::with('roles:id,nombre')->orderBy('id')->get();
        return view('admin.usuario.index', compact('datas'));
    }

    public function create()
    {
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $formularios = Formularios::orderBy('id')->pluck('nombre', 'id')->toArray();
        return view('admin.usuario.create', compact('rols', 'formularios'));
    }
 
    public function store(ValidacionUsuario $request)
    {
        $usuario = Usuario::create($request->all());
        $usuario->roles()->sync($request->rol_id); 
        $usuario->formularios()->sync($request->formulario_id);
        return redirect('admin/usuario')->with('mensaje', 'Usuario creado con exito');         
    }

    public function edit($id)
    {
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $formularios = Formularios::orderBy('id')->pluck('nombre', 'id')->toArray();
        $data = Usuario::with('roles', 'formularios')->findOrFail($id);
        return view('admin.usuario.edit', compact('data', 'rols', 'formularios'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update(array_filter($request->all()));
        $usuario->roles()->sync($request->rol_id);
        $usuario->formularios()->sync($request->formulario_id);
        return redirect('admin/usuario')->with('mensaje', 'Usuario actualizado con exito');
    }

    public function destroy(Request $request, $id)
    {
         if($request->ajax()){
            $usuario = Usuario::findOrFail($id);
            $usuario->roles()->detach();
            $usuario->delete(); 
            return response()->json(['mensaje' => 'ok']);
         }
         else{
             abort(404);
         }
    }
}
