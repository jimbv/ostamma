<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Consulta;

class AdminConsultaController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('nombre'); 
        $consultas = Consulta::where('apellido','like',"%$nombre%")
                ->orWhere('nombres','like',"%$nombre%")->orderBy('id','desc')->paginate(5);
                
        return view('admin.consulta.index',compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $con = Consulta::where('id',$id)->firstOrFail();
        $editar = "Si";

        return view('admin.consulta.show',compact('con','editar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
            $con = Consulta::where('id',$id)->firstOrFail();
            $editar = "Si";
    
            return view('admin.consulta.edit',compact('con','editar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $con = Consulta::findOrFail($id); 


        
        $request->validate([ 
            'nombres'=> 'required',
            'apellido'=> 'required', 
            'email'=> 'required|email',
            'nrodocumento'=> 'required', 
            'consulta'=> 'required',
        ]); 
        $con->fill($request->all())->save(); 
        return redirect()->route('admin.consulta.index')->with('datos','Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $con = Consulta::findOrFail($id); 
        $con->delete();
        return redirect()->route('admin.consulta.index')->with('datos','Registro eliminado correctamente');
    }
}
