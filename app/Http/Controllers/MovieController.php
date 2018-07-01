<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
		return 'Estoy en el index';    	
    }
    public function create(){
		return 'Estoy en el create';    	
    }
    public function update(){
		return 'Estoy en el update';    	
    }
    public function edit(){
		return 'Estoy en el edit';    	
    }
    public function delete(){
		return 'Estoy en el delete';    	
    }            
}
