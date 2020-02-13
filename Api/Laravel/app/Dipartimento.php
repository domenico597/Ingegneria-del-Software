<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dipartimento extends Model
{
    public $timestamps = false;
    protected $table = 'Dipartimento';
    protected $primaryKey = 'Dipartimento';
    protected $fillable = ['Nome', 'Numero_aule', 'Universita'];
}
