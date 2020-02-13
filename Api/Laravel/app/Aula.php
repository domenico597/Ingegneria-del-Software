<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    public $timestamps = false;
    protected $table = 'Aula';
    protected $primaryKey = 'ID_Aula'; 
    protected $fillable = ['Codice_Aula', 'Descrizione', 'Indirizzo', 'Edificio', 'Piano'];
}
