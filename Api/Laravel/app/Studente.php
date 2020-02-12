<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studente extends Model
{
    public $timestamps = false; 

    protected $table = 'Studente';
    protected $primaryKey = 'ID_Studente';
    protected $fillable = ['Nome', 'Cognome', 'Matricola', 'Email', 'Password', 'Corso'];
}
