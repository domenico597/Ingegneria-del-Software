<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    public $timestamps = false;
    protected $table = 'Posto';
    protected $primaryKey = 'ID_Posto';
    protected $fillable = ['Numero_posto'];
}
