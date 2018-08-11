<?php

namespace App\Http\Controllers;

use DB;//para acceder a la base de datos
use App\Message; //import que contiene las reglas de validacion
use Illuminate\Http\Request;
use Carbon\Carbon;

class MessagesController extends Controller
{

    function __construct()
    {
        //$this->middleware('auth',['except'=> ['create','store']]);//esto es para que no deje acceder por URL excepto al metodo create.
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$messages = DB::table('messages')->get();

       $messages = Message::all();//esta linea hace lo mismo que la de arriba

        return view('messages.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //guardar
       // DB::table('messages')->insert([
       //     "nombre"=> $request->input('nombre'),
       //     "email"=> $request->input('email'),
       //     "mensaje"=> $request->input('mensaje'),
       //     "created_at" => Carbon::now(),
       //     "updated_at" => Carbon::now(),
       // ]);

        Message::create($request->all());//esta linea reemplaza todo el codigo de arriba

        //redireccionar
        return redirect()->route('mensajes.create')->with('info','Hemos recibido tu mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$message = DB::table('messages')->where('id',$id)->first();

        $message = Message::findOrFail($id);//esta linea hace lo mismo que la de arriba

        return view('messages.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       // $message = DB::table('messages')->where('id',$id)->first();

        $message = Message::findOrFail($id);//esta linea hace lo mismo que la de arriba

        return view('messages.edit',compact('message'));
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
        //actualizamos 
        //DB::table('messages')->where('id',$id)->update([
        //    "nombre"=> $request->input('nombre'),
        //    "email"=> $request->input('email'),
        //    "mensaje"=> $request->input('mensaje'),
        //    "updated_at" => Carbon::now(),
        //]);

        Message::findOrFail($id)->update($request->all());//esta linea hace lo mismo que la de arriba

        //redireccionamos
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('messages')->where('id',$id)->delete();

         Message::findOrFail($id)->delete();//esta linea hace lo mismo que la de arriba

        return redirect(route('mensajes.index'));
    }
}
