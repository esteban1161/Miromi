<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudads";
    protected $fillable = ['nombreCiudad'];
    protected $guarded = ['id'];
}
