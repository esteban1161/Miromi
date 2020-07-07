<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SintomasGenerales extends Model
{
    protected $table = "sintomas_generales";
    protected $fillable = [ 'evento_id',
                                        'sueno',
                                        'sedApetito',
                                        'temperatura',
                                        'vitalidad',];
    protected $guarded = ['id'];

    public $timestamps = false;
}


            