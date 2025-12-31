<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProviderType;
use App\Models\Specialty;

class Provider extends Model
{

    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'image', 'provider_type_id'];

    public function providerType()
    {
        return $this->belongsTo(ProviderType::class);
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
}
