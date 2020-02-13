<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    public $timestamps = false;
    protected $table = 'Docente';
    protected $primaryKey = 'ID_Docente';
    protected $fillable = ['Nome', 'Cognome', 'Email', 'Telefono', 'Password'];
}
