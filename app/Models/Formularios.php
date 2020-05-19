<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formularios extends Model
{
    protected $table = "formularios";

    protected $fillable = ['nombre', 'route'];
    
    protected $guarded = ['id'];
    
}
