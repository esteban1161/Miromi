<?php

namespace App\Models;

use App\Models\Admin\Paciente;
use Illuminate\Database\Eloquent\Model;

class DatosIdentificacion extends Model
{
    protected $table = "datos_identificacions";
    protected $fillable = [ 'evento_id',
                                        'primerNombre', 
                                        'segundoNombre', 
                                        'primerApellido', 
                                        'segundoApellido',
                                        'tipoDocumento',
                                        'numeroIdentificacion',
                                        'sexo',
                                        'fechaNacimiento'];
    protected $guarded = ['id'];

    public function historiaClinicaB(){
        return $this->hasMany(HistoriaClinicaBasica::class);
    }

}
