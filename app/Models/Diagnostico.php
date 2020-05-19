<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = "diagnosticos";

    protected $fillable = ['evento_id',
                                       'cie10s_id',
                                       'tipoDiagnostico'];
                                       
    protected $guarded = ['id'];

    public function cie10s(){
        return $this->belongsTo(Cie10::class);
    }
}
