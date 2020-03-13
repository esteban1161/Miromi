<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionMenu;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::getMenu();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menu.create');        
    }
    
    public function store(ValidacionMenu $request)
    {
        Menu::create($request->all());
        return redirect('admin/menu')->with('mensaje', 'Menu creado con exito'); 
    }

    public function edit($id)
    {
        $data = Menu::findOrFail($id);
        return view('admin.menu.edit', compact('data'));
    }

    public function update(ValidacionMenu $request, $id)
    {
        Menu::findOrFail($id)->update($request->all());
        return redirect('admin/menu')->with('mensaje', 'Menu actualizado con exito');
    }

    public function destroy($id)
    {
        Menu::destroy($id);
        return redirect('admin/menu')->with('mensaje', 'Menu eliminado con exito');
    }

    public function guardarOrden(Request $request)
    {
        if ($request->ajax()) {
            $menu = new Menu;
            $menu->guardarOrden($request->menu);
            return response()->json(['respuesta' => 'ok']);
        } else {
            abort(404);
        }
    }
}
