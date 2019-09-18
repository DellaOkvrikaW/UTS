<?php

use Illuminate\Http\Request;

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::middleware(['jwt.verify'])->group(function(){
  Route::get('mobil', 'MobilController@index');
  Route::post('mobil', 'MobilController@create');
  Route::get('/mobil/{id}','MobilController@detail');
  Route::put('/mobil/{id}','MobilController@update');
  Route::delete('/mobil/{id}', 'MobilController@delete');
  Route::post('/nota/{id}', 'PinjamController@hitung');

  });