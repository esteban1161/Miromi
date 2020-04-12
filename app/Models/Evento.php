<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventos";

    protected $fillable = ['usuario_id',
                                       'rol_id',
                                       'formulario_id',
                                        'identificacion_id'];
    protected $guarded = ['id'];

    public function identificacion(){
        return $this->hasOne(DatosIdentificacion::class);
    }

    public function historiaClinicaB(){
        return $this->hasOne(HistoriaClinicaBasica::class);
    }

    public function demografico(){
        return $this->hasOne(DatosDemograficos::class);
    }

    public function consultorio(){
        return $this->hasOne(DatosConsultorios::class);
    }

    public function academico(){
        return $this->hasOne(DatosAcademicos::class);
    }
    
    public function afiliacion(){
        return $this->hasOne(DatosAfiliacion::class);
    }

    public function telefonos(){
        return $this->hasOne(Telefono::class);
    }

    public function antecedente(){
        return $this->hasOne(Antecedente::class);
    }

    
    public function consulta(){
        return $this->hasOne(Consulta::class);
    }

    
    public function examenFisico(){
        return $this->hasOne(ExamenFisico::class);
    }

    
    public function revisionSistema(){
        return $this->hasOne(RevisionSistema::class);
    }

    
    public function correosElectronicos(){
        return $this->hasOne(CorreoElectronico::class);
    }

    public function scopeConsultaPacientes($query){
        return $query   ->where('usuario_id', $id = auth()->id())
                                ->where('rol_id', 2)
                                ->where('formulario_id', 2);
    }
    
    public function scopeConsultaHistoriasClinicas($query, $identificacion){
        return $query   ->where('usuario_id', $id = auth()->id())
                                ->where('rol_id', 2)
                                ->where('formulario_id', 3)
                                ->where('identificacion_id', $identificacion);
    }
}
