<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administracion extends Controller
{
    //
    function inicio(){
        $usuario = 'José';
        return view('admin.inicio',compact('usuario'));

    }


}
