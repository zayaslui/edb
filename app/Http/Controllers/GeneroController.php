<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Generos;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Cinema\Http\Requests\GeneroCreateRequest;
use Cinema\Http\Requests\GeneroUpdateRequest;


class GeneroController extends Controller
{
    public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->genero = Generos::findOrFail($request->route()->parameters['genero']);
            return $next($request);
        },['only' => ['edit','destroy','update']]);        
    }

    public function index(){
        // $generos = Generos::All();
        $generos = Generos::Paginate(2); // usar paginate en el front
    	return view('genero.index',compact('generos'));
    }

    public function create(){
        return view('genero.create');
    }

    // public function store(Request $request){
    public function store(GeneroCreateRequest $request){
/*        Generos::create([
    		"descripcion" => $request['descripcion']
    	]);
  */
        Generos::create($request->all());
    	return redirect('/genero')->with('message','Registro creado');
    }

    public function edit(){
        return view('genero.edit',['genero'=>$this->genero]);
    }

    // public function update(Request $request, $id){
    public function update(GeneroUpdateRequest $request,$id){
        $this->genero->fill($request->all());
        $this->genero->save();
        Session::flash('message','El registro editado con exito');
        return Redirect::to('/genero');
    }
    public function destroy(){
        $this->genero->delete();
        Session::flash('message','Genero eliminado correctamente');
        return Redirect::to('/genero');
    }
}
