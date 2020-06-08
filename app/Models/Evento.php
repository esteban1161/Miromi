<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventos";

    protected $fillable = ['usuario_id',
                                       'rol_id',
                                       'formularios_id',
                                        'identificacion_id'];
    protected $guarded = ['id'];

    public function identificacion(){
        return $this->hasOne(DatosIdentificacion::class);
    }

    public function formularios(){
        return $this->belongsTo(Formularios::class);
    }

    public function historiaBlanco(){
        return $this->hasOne(HistoriaBlanco::class);
    }

    public function formatosBase(){
        return $this->hasOne(FormatoBase::class);
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
        return $this->hasMany(ArchivosAdjuntos::class);
    }

    public function diagnosticos(){
        return $this->hasMany(Diagnostico::class);
    }

    public function scopeConsultaTerapeuta($query){
        return $query   ->where('usuario_id', $id = auth()->id())
                                ->where('rol_id', 2)
                                ->where('formularios_id', 1);
    }

    public function scopeConsultaPacientes($query){
        return $query   ->where('usuario_id', $id = auth()->id())
                                ->where('rol_id', 2)
                                ->where('formularios_id', 2);
    }
    
    public function scopeConsultaFormatosBase($query, $identificacion){
        return $query   ->where('usuario_id', $id = auth()->id())
                                ->where('rol_id', 2)                                
                                ->where('identificacion_id', $identificacion);
    }   

    public function scopeEntreFechas($query, $f1, $f2){
        
        return $query   ->where('usuario_id', $id = auth()->id())
                                ->where('rol_id', 2)
                                ->whereIn('formularios_id', [3, 4])
                                ->whereBetween('created_at', [$f1, $f2]);
                                
    }
    
}
