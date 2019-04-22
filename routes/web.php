<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test/{nom}', function () {
  $nom = request('nom');
    return view('bonjour' , ['nom' => $nom]);
});
Route::get('/', function () {
    return view('index');
});
Route::get('/article',function (){
    $utilisateurs = App\utilisateurs::all();

  return view('article', ['utilisateurs' => $utilisateurs] );
});
Route::get('/informations',function (){
  return view('imc');
});
Route::get('/menu',function (){
  return view('menu');
});
Route::get('/contact',function (){
  return view('contact');
});
Route::get('/inscription',function (){
  return view('inscription');
});
Route::post('/inscription',function (){
  request()->validate([
    'Nom' => ['required'],
    'Prenom' => ['required'],
    'Mdp' => ['required'],
  ]);
  $utilisateur = new App\utilisateurs;
  $utilisateur->nom=request('Nom');
  $utilisateur->mdp=bcrypt(request('Mdp'));
  $utilisateur->save();
  return view('/inscription');

});
