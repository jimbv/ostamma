<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Prestadores que ofrecen esta especialidad
     */
    public function providers()
    {
        return $this->belongsToMany(
            Provider::class,
            'provider_specialty',
            'specialty_id',
            'provider_id'
        );
    }
}
