<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrenDoc extends Model
{
    public $timestamps = false;
    protected $table = 'Prenotazione_Docente';
    protected $primaryKey = 'ID_Prenotazione_Lezione';
    protected $fillable = ['Docente', 'Aula', 'Materia', 'Data_prenotazione', 'Orario_prenotato'];
}
