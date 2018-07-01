<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\User;

use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Routing\Route;

// use Closure;

class UsuarioController extends Controller
{

    // public function __construct(Route $route){
    public function __construct(){

        $this->middleware(function ($request, $next) {
            $this->user = User::findOrFail($request->route()->parameters['usuario']);
            return $next($request);
        },['only' => ['edit','destroy','update']]);

    }

    public function index(){
        /*sin paginacion*/
        // $user = User::All();
        /*con paginacion*/
        /*ver los que se borraron*/
        //$users = User::onlyTrashed()->Paginate(2);
        $users = User::Paginate(2);
        return view('usuario.index',compact('users'));
    }    

    public function create(){
    	return view('usuario.create');
    }

    // public function store(Request $request){
        public function store(UserCreateRequest $request){

            /*update*/
            User::create($request->all());
    	// User::create([
    	// 	'name' => $request['name'],
     //        'email' => $request['email'],
     //        'password' => $request['password'],
    	// ]);
        return redirect('/usuario')->with('message', 'Registro creado exitosamente!');
    }

    // public function update(Request $request, $id){
    public function update(UserUpdateRequest $request, $id){    
        //$user = User::find($id);
        $this->user->fill($request->all()); //fill acomoda
        $this->user->save();
        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');
    }   

    public function edit(){
        // return $this->user;
        // $user = User::find($id);
        // return view('usuario.edit',['user'=>$user]);
        return view('usuario.edit',['user'=>$this->user]);
    }

    public function destroy(){
        /*borrado normal*/
        // $user = User::destroy($id);
        //$user = User::find($id);
        /*borrado por soft*/
        $this-> user ->delete();
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }

}
