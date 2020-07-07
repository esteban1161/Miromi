<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = "ubicacions";

    protected $fillable = ['pais',
                                       'departamento',
                                       'ciudad',
                                       'localidad'];
                                       
    protected $guarded = ['id'];

    public $timestamps = false;

}
