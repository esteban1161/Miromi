<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formularios extends Model
{
    protected $table = "formularios";

    protected $fillable = ['nombre',];
    
    protected $guarded = ['id'];
}
