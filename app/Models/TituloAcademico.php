<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TituloAcademico extends Model
{
    protected $table = "titulo_academicos";

    protected $fillable = ['titulo',
                                       'descripcion',];
                                       
    protected $guarded = ['id'];
}
