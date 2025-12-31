<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\ProviderType;
use App\Models\Specialty;

class ProviderController extends Controller
{
    public function cartilla()
    {
        $especialidades = Specialty::select('name', 'slug')->orderBy('name')->get();
        $types = ProviderType::all();
        $categorias = ProviderType::orderBy('name')->get();
        return view('cartilla', compact('categorias','especialidades', 'types'));
    }

   
}