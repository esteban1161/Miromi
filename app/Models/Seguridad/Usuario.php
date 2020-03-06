<?php

namespace App\Models\Seguridad;

use App\Models\Admin\Rol;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table = "usuarios";
    protected $fillable = ['usuario', 'nombre', 'password'];
    protected $guarded = ['id'];

    public function roles(){
        return $this->belongsToMany(Rol::class, 'usuario_rols');
    }

    public function setSession($roles){
        if(count($roles) ==1){
            Session::put([
                'rol_id' =>$roles[0]['id'],
                'rol_nombre' => $roles[0]['nombre'],
                'usuario' => $this->usuario,
                'usuario_id' => $this->id,
                'nombre_usuario' => $this->nombre,
                
            ]);
        }
        else{

        }
    }
}
