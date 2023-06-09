<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';

    public function profesor_propuesta(){
        return $this->hasMany('App\Models\profesor_propuesta');
    }
}
