<?php

namespace App\Models\Seguridad;

use App\Models\Admin\Rol;
use App\Models\DatosAcademicos;
use App\Models\DatosConsultorios;
use App\Models\DatosIdentificacion;
use App\Models\DatosPersonales;
use App\Models\Eventos;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table = "usuarios";
    protected $fillable = [ 'usuario', 
                                        'nombre',
                                        'email',
                                        'password'];

    public function roles(){
        return $this->belongsToMany(Rol::class, 'usuario_rols');
    }

    public function setSession($roles){
       
        Session::put([
            'usuario' => $this->usuario,
            'usuario_id' => $this->id,
            'nombre_usuario' => $this->nombre,
        ]);
        if(count($roles) ==1){
            Session::put([
                'rol_id' =>$roles[0]['id'],
                'rol_nombre' => $roles[0]['nombre'],         
            ]);
        }
        else{
            Session::put('roles', $roles);
        }
    }
    public function setPasswordAttribute($pass){
        $this->attributes['password'] = Hash::make($pass);
    }

    public function identificacion(){
        return $this->hasOneThrough(Eventos::class, DatosIdentificacion::class);
    }

    public function consultorios(){
        return $this->hasOneThrough(Eventos::class, DatosConsultorios::class);
    }

    public function academicos(){
        return $this->hasOneThrough(Eventos::class, DatosAcademicos::class);
    }

     public function personales(){
        return $this->hasOneThrough(Eventos::class, DatosPersonales::class);
    }
}
