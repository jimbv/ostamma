<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Models\ProviderType;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use App\Models\Plan;

class ProvidersController extends Controller
{
    public function list()
    {
        $providers = Provider::all();
        return view('admin.providers.list', compact('providers'));
    }

    public function create()
    {
        $types = ProviderType::all();
        $plans = Plan::all();
        return view('admin.providers.create', compact('types', 'plans'));
    }

    public function save(Request $request)
    {
        try {


            $provider = Provider::create($request->validate([
                'name' => 'required|string',
                'address' => 'nullable|string',
                'city' => 'nullable|string',
                'province' => 'nullable|string',
                'lat' => 'nullable|numeric',
                'lng' => 'nullable|numeric',
                'phone' => 'nullable|string',
                'email' => 'nullable|email',
                'provider_type_id' => 'required|exists:provider_types,id',
                'plans' => 'array',
                'plans.*' => 'exists:plans,id'
            ]));


            $provider->plans()->sync($request->plans ?? []);
            return redirect()->back()->with('success', 'Proveedor guardado correctamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
            return redirect()->back()->withErrors($errors);
        }
    }


    public function delete($id)
    {
        $provider = Provider::find($id);
        $provider->delete();
        return redirect()->back();
    }

    public function edit($id)
    {

        $types = ProviderType::all();
        $provider = Provider::find($id);
        $plans = Plan::all();
        return view('admin.providers.edit', compact('provider', 'types', 'plans'));
    }

    public function update(Request $request, Provider $provider)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'province' => 'nullable|string',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'provider_type_id' => 'required|exists:provider_types,id',
            'plans' => 'array',
            'plans.*' => 'exists:plans,id',
        ]);

        $provider->update($validated); 
        $provider->plans()->sync($request->plans ?? []);

        return redirect()
            ->route('providers')
            ->with('success', 'Prestador actualizado correctamente');
    }
}
