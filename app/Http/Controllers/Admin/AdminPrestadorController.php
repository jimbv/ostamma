<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prestador;
use App\especialidad;

class AdminPrestadorController extends Controller
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

        /*$table->id();
            $table->string('matricula')->nullable(); 
            $table->integer('especialidad_id'); 
            $table->integer('personas_id');  
            $table->integer('tipo_prestadores_id'); 
            $table->timestamps();

            $table->foreign('personas_id')->references('id')->on('personas');
            $table->foreign('especialidad_id')->references('id')->on('categories'); 
            $table->foreign('tipo_prestadores_id')->references('id')->on('tipo_prestadores');*/

       // $nombre = $request->get('nombre');
       // dd($nombre);
        $prestadores = Prestador::all();
        return $prestadores;
       // return view('admin.Prestador.index',compact('prestadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = especialidad::orderBy('nombre')->get(); 

        return view('admin.prestador.create',compact('especialidades'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'nombre'=> 'required|max:255|unique:prestadores,nombre',
            'slug'=> 'required|max:255|unique:prestadores,slug',
            'imagenes.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        
        $urlimagenes = [];

        // Si viene un archivo de las imagenes
        if($request->hasFile('imagenes')){
            $imagenes = $request->file('imagenes');

            foreach($imagenes as $imagen){
                $nombre = time().'_'.$imagen->getClientOriginalName();

                $ruta = public_path().'/imagenes';

                $imagen->move($ruta,$nombre);
                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }
            

        }
        

        
        $prod = new Prestador;


        $prod->nombre = $request->nombre;	 
        $prod->slug = $request->slug;	 
        $prod->especialidad_id = $request->especialidad_id;	 
        $prod->cantidad = $request->cantidad;
        $prod->precio_anterior = $request->precioanterior;	 
        $prod->precio_actual = $request->precioactual;	 
        $prod->porcentaje_descuento = $request->porcentajededescuento;	 
        $prod->descripcion_corta = $request->descripcion_corta;	 
        $prod->descripcion_larga = $request->descripcion_larga;	 
        $prod->especificaciones = $request->especificaciones;	 
        $prod->datos_de_interes = $request->datos_de_interes;	 
        $prod->estado = $request->estado;

        if($request->activo){
            $prod->activo = 'Si';
        }else{
            $prod->activo = 'No';
        }

        if($request->sliderprincipal){
            $prod->slider_principal = 'Si';
        }else{
            $prod->slider_principal = 'No';
        }
  
        $prod->save();
 
        $prod->images()->createMany($urlimagenes);

       // return $prod->images;
       return redirect()->route('admin.Prestador.index')->with('datos','Registro creado correctamente');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $prestador = Prestador::with('images','especialidad')->where('slug',$slug)->firstOrFail();
        $categorias = especialidad::orderBy('nombre')->get();

        $estados_prestadores = $this->estados_prestadores();
        return view('admin.Prestador.edit',compact('categorias','prestador','estados_prestadores'));

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
        $request->validate([
            'nombre'=> 'required|max:255|unique:prestadores,nombre,'.$id,
            'slug'=> 'required|max:255|unique:prestadores,slug,'.$id,
            'imagenes.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        
        $urlimagenes = [];

        // Si viene un archivo de las imagenes
        if($request->hasFile('imagenes')){
            $imagenes = $request->file('imagenes');

            foreach($imagenes as $imagen){
                $nombre = time().'_'.$imagen->getClientOriginalName();

                $ruta = public_path().'/imagenes';

                $imagen->move($ruta,$nombre);
                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }
            

        }
        

        
        $prod = Prestador::findOrFail($id);


        $prod->nombre = $request->nombre;	 
        $prod->slug = $request->slug;	 
        $prod->especialidad_id = $request->especialidad_id;	 
        $prod->cantidad = $request->cantidad;
        $prod->precio_anterior = $request->precioanterior;	 
        $prod->precio_actual = $request->precioactual;	 
        $prod->porcentaje_descuento = $request->porcentajededescuento;	 
        $prod->descripcion_corta = $request->descripcion_corta;	 
        $prod->descripcion_larga = $request->descripcion_larga;	 
        $prod->especificaciones = $request->especificaciones;	 
        $prod->datos_de_interes = $request->datos_de_interes;	 
        $prod->estado = $request->estado;

        if($request->activo){
            $prod->activo = 'Si';
        }else{
            $prod->activo = 'No';
        }

        if($request->sliderprincipal){
            $prod->slider_principal = 'Si';
        }else{
            $prod->slider_principal = 'No';
        }
  
        $prod->save();
 
        $prod->images()->createMany($urlimagenes);

       // return $prod->images;
       return redirect()->route('admin.Prestador.edit',$prod->slug)->with('datos','Registro actualizado correctamente');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Prestador::findOrFail($id); 
        $prod->delete();
        return redirect()->route('admin.Prestador.index')->with('datos','Registro eliminado correctamente');
    }


    public function estados_prestadores()
    {
        return [
            '',
            'Destacado'       
        ];
    }


}
