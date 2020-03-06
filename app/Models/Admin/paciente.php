<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "pacientes";
    protected $fillable = ['nombre', 'apellidos', 'edad', 'descripcion'];
    protected $guarded = ['id'];
}
