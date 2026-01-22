@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<h1>Nueva Especialidad</h1>
@stop

@section('content')

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Especialidades</li>
    <li class="breadcrumb-item active">Nueva especialidad</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <form method="POST" action="{{ route('specialities') }}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
                <div class="col-md-6">
                    <input id="name" oninput="slugGenerate();" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus />

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}  </strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="slug" class="col-md-4 col-form-label text-md-end">Slug</label>
                <div class="col-md-6">
                    <input id="slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" required autocomplete="slug" autofocus />

                    @error('slug')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
             
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Guardar Especialidad    
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')
<script>
    function slugGenerate() {
        var nombreInput = document.getElementById('name');
        var slugInput = document.getElementById('slug');
        var name = nombreInput.value;
        var slug = name.toLowerCase().replace(/[^a-z0-9]+/g, '-');
        slugInput.value = slug;
    }
</script>
 
@stop