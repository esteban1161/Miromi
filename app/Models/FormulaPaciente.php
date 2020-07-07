<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormulaPaciente extends Model
{
    protected $table = "formula_pacientes";

    protected $fillable = ['evento_id',
                                        'prescripcion',
                                        'cantidad',
                                        'observaciones',];

    protected $guarded = ['id'];

    public $timestamps = false;
}
