<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionRol;
use App\Models\Admin\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        $datas = Rol::orderBy('id')->get();
        return view('admin.rol.index', compact('datas'));
    }

    public function create()
    {
        return view('admin.rol.create');
    }

    public function store(ValidacionRol $request)
    {
        Rol::create($request -> all());
        return redirect('admin/rol') ->with('mensaje', 'Rol creado con exito');
    }

    public function edit($id)
    {
        $data = Rol::findOrFail ($id);
        return view('admin.rol.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Rol::findOrFail($id)->update($request->all());
        return redirect('admin/rol') ->with('mensaje', 'Rol actualizado con exito');
    }

    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            if (Rol::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
