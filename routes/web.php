<?php

Route::get('/',['as' => 'home','uses' => 'PagesController@home'])->middleware('example');

Route::get('saludos/{nombre?}',['as' => 'saludos','uses' => 'PagesController@saludo'])->where('nombre',"[A-Za-z]+");  

Route::get('login','Auth\LoginController@showLoginForm');

Route::post('login','Auth\LoginController@login');

Route::get('logout','Auth\LoginController@logout');

Route::resource('mensajes','MessagesController'); //esta linea de codigo reemplaza todas las rutas que estan comentadas abajo


//route::get('mensajes',['as' => 'messages.index','uses' => 'MessagesController@index']);

//route::get('mensajes/create',['as' => 'messages.create','uses' => 'MessagesController@create']);

//route::post('mensajes',['as' => 'messages.store','uses' => 'MessagesController@store']);
   
//route::get('mensajes/{id}',['as' => 'messages.show','uses' => 'MessagesController@show']);

//route::get('mensajes/{id}/edit',['as' => 'messages.edit','uses' => 'MessagesController@edit']);

//route::put('mensajes/{id}',['as' => 'messages.update','uses' => 'MessagesController@update']);

//route::delete('mensajes/{id}',['as' => 'messages.destroy','uses' => 'MessagesController@destroy']);
