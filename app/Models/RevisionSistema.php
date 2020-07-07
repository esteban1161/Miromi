<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RevisionSistema extends Model
{
    protected $table = "revision_sistemas";
    protected $fillable = [ 'evento_id',
                                        'cabeza',
                                        'cardioPulmonarRS',
                                        'urinario',
                                        'extremidadesRS',
                                        'psiquismo',
                                        'organosSentidos',
                                        'digestivo',
                                        'genital', 
                                        'pielAnexosRS',
                                        'endocrinologico',];
    protected $guarded = ['id'];

    public $timestamps = false;

}
