<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProviderType;
use App\Models\Specialty;
use App\Models\Plan;

class Provider extends Model
{

    use HasFactory;
    protected $fillable = [
    'name',
    'address',
    'city',
    'province',
    'lat',
    'lng',
    'phone',
    'email',
    'provider_type_id',
];

    public function providerType()
    {
        return $this->belongsTo(ProviderType::class, 'provider_type_id');
    }

    public function type()
    {
        return $this->belongsTo(ProviderType::class, 'provider_type_id');
    }

    public function specialties()
    {
        return $this->belongsToMany(
            Specialty::class,
            'provider_specialty',
            'provider_id',
            'specialty_id'
        );
    }

    public function plans()
    {
        return $this->belongsToMany(
            Plan::class,
            'plan_provider',
            'provider_id',
            'plan_id'
        );
    }
}
