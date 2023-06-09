<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';

    public function propuesta(){
        return $this->hasMany('App\Models\propuesta');
    }
}
