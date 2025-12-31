<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provider; 

class ProviderType extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];

    public function providers()
    {
        return $this->hasMany(Provider::class);
    }
}