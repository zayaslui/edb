<?php


namespace Cinema\Http\Controllers;

class PruebaController extends Controller
{

    public function index()
    {
        return 'Hola desde controlador';
    }
    public function nombre($nombre){
    	return 'Hola '.$nombre.' desde controlador';
    }
    public function apellido($apellido){
    	return 'Hola '.$apellido.' desde controlador';
    }    
}