<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $timestamps = false;
    protected $table = 'Materia';
    protected $primaryKey = 'ID_Materia';
    protected $fillable = ['Nome', 'Semestre', 'Obbligatoria'];
}
