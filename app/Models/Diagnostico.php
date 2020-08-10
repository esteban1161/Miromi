<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = "diagnosticos";

    protected $fillable = ['evento_id',
                                       'cie10_Desc',
                                       'cie10_cod',
                                       'tipoDiagnostico',
                                        'observacionesDx'];
                                       
    protected $guarded = ['id'];

    public $timestamps = false;

    public function cie10s(){
        return $this->belongsTo(Cie10::class);
    }
}
