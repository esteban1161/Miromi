<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = "localidads";
    protected $fillable = ['localidadResidencia'];
    protected $guarded = ['id'];

    public $timestamps = false;

}
