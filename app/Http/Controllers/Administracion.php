<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administracion extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    
    function inicio(){
        $usuario = 'José';
        return view('admin.inicio',compact('usuario'));

    }
    function prueba(){
    $user = auth()->user();    
    $users = auth()->user();
    return view('dashboard.admin.userEditForm',compact('users','user'));
    }

}
