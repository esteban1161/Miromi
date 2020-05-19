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

    public function consultorios(){
        return $this->hasMany(DatosConsultorios::class);
    }

    public function academicos(){
        return $this->hasMany(DatosAcademicos::class);
    }
    
    public function afiliacion(){
        return $this->hasOne(DatosAfiliacion::class);
    }

    public function telefonos(){
        return $this->hasMany(Telefono::class);
    }

    public function correosElectronicos(){
        return $this->hasMany(CorreoElectronico::class);
    }

    public function antecedentes(){
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
    
    public function archivosAdjuntos(){
        return $this->hasOne(ArchivosAdjuntos::class);
    }

    public function diagnosticos(){
        return $this->hasMany(Diagnostico::class);
    }

    public function scopeConsultaTerapeuta($query){
        return $query   ->where('usuario_id', $id = auth()->id())
                                ->where('rol_id', 2)
                                ->where('formulario_id', 1);
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
