<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrenStud extends Model
{
    public $timestamps = false;
    protected $table = 'Prenotazione_studente';
    protected $primaryKey = 'ID_Prenotazione';
    protected $fillable = ['Posto', 'Data_Ora', 'Data_prenotata', 'Orario_prenotato'];
}
