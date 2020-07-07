<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    protected $table = "formulas";

    protected $fillable = ['prescripcion',
                                        'cantidad',
                                        'observaciones',];

    protected $guarded = ['id'];

    public $timestamps = false;}
