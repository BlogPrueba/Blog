<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('example');//['only'=> ['home']] se puede pasar como 2 parametro
    }

    public function home()
    {
    	return view('home');
    }

    public function saludo($nombre = "Invitado")
    {
    	$html = "<h2>Contenido html</h2>";
    	$script = "<script>alert('Problema XSS - Cross site Scripting!')</script>";
    	
    	$consolas = [
    	"Play Station 4",
    	"Xbox One",
    	"Wii U"	
    	];

    	return view('saludo',compact('nombre','html','script','consolas'));
    	
    	//Estos 2 ejemplos hacen lo mismo que el return de arriba
    	// return view('saludo',['nombre' => $nombre]);
    	//return view('saludo')->with(['nombre' => $nombre]);
    }


}
