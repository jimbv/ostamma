<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    protected $table = 'prestadores';
    use HasFactory;

    public function especialidad(){
        return $this ->belongsTo('App\Especialidad');
    }
}
