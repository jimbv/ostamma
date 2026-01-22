<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class SpecialitiesController extends Controller
{
    public function list()
    {
        $specialities = Specialty::all(); 
        return view('admin.specialities.list', compact('specialities'));
    }

    public function create()
    {
        return view('admin.specialities.create');
    }

    public function save(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:specialties,slug',
            ], [
                'name.required' => 'El campo Nombre es obligatorio.',
                'slug.required' => 'El campo Slug es obligatorio.',
                'slug.unique' => 'El Slug ya existe.',
            ]);

            Specialty::create($validatedData);

            return redirect()->back()->with('success', 'Especialidad guardada correctamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
            return redirect()->back()->withErrors($errors);
        }
    }


    public function delete($id)
    {
        $speciality = Specialty::find($id);
        $speciality->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $speciality = Specialty::find($id);
        return view('admin.specialities.edit', compact('speciality'));
    }

    public function update(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:specialties,slug,' . $specialty->id,
            ], [
                'name.required' => 'El campo Nombre es obligatorio.',
                'slug.required' => 'El campo Slug es obligatorio.',
                'slug.unique' => 'El Slug ya existe.',
            ]);

            $specialty->update($validatedData);

            return redirect()->back()->with('success', 'Especialidad actualizada correctamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
            return redirect()->back()->withErrors($errors);
        }
    }
}
