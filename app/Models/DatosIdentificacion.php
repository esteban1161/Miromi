<?php

namespace App\Models;

use App\Models\Admin\Paciente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class DatosIdentificacion extends Model
{
    protected $table = "datos_identificacions";
    protected $fillable = [ 'evento_id',
                                        'foto',
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

    public static function setFotoPerfil($foto, $actual = false)
    {
        if ($foto) {
            if ($actual) {
                Storage::disk('public')->delete("imagenes/FotosPacientes/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(530, 470, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/FotosPacientes/$imageName", $imagen->stream());
            return $imageName;
        } else {
            return false;  
        }
    }

}
