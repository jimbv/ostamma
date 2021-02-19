<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    
    protected $fillable=['apellido','nombres','nrodocumento','consulta','localidad','estado','observaciones','email','prefijo','telefono','area'];
}
