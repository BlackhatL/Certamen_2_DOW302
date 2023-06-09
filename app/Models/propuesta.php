<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';

    public function estudiante(){
        return $this->belongsTo('App\Models\estudiantes');
    }
    public function profesor_propuesta(){
        return $this->hasMany('App\Models\profesor_propuesta');
    }
}
