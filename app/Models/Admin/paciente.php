<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "pacientes";
    protected $fillable = [];
    protected $guarded = ['id'];

}
