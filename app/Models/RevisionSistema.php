<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RevisionSistema extends Model
{
    protected $table = "revision_sistemas";
    protected $fillable = [ 'evento_id',
                                        'cabeza',
                                        'organosSentidos',
                                        'cardioPulmonar',
                                        'digestivo',
                                        'urinario',
                                        'genital',
                                        'miembros',
                                        'pielAnexosRS',
                                        'psiquismo',
                                        'endocrinologico',];
    protected $guarded = ['id'];
}
