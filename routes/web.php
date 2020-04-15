<?php

use Illuminate\Support\Facades\Route;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

///*
// * ejemplos del curso laravel desde 0
// */
//
//Route::get('contactos',function(){
//    return "Hola desdee la pagina de contacto";
//});*/
////pasar parametros
//Route::get('saludo/{nombre}',function($nombre){
//   return "Saludos ".$nombre;
//});
////para no pasar un parametro que no sea obligatorio
//Route::get('saludo/{nombre?}',function($nombre="Invitado"){
//    return "Saludos ".$nombre;
//});
//
////rutas con nombre
//Route::get('contactame',function(){
//    return "Seccion de contactos";
//})->name("contactos");*/
//
//route::get('/',function(){
//    echo "<a href='/contactos'> Contactos 1</a> <br>";
//    echo "<a href='/contactos'> Contactos 2</a><br>";
//    echo "<a href='/contactos'> Contactos 3</a><br>";
//    echo "<a href='/contactos'> Contactos 4</a><br>";
//});
//
////cambiar la url a contactanos
//
//route::get('/',function(){
//    echo "<a href='". \route('contactos')."'> Contactos 1</a> <br>";
//    echo "<a href='". \route('contactos')."'> Contactos 2</a> <br>";
//    echo "<a href='". \route('contactos')."'> Contactos 3</a> <br>";
//    echo "<a href='". \route('contactos')."'> Contactos 4</a> <br>";
//});
//
//
////retornar vistas desde rutas
//
//
//route::get('/',function(){
//    $nombre="Jorge";
//
//     return view('home')->with('nombre', $nombre);
//})->name('home');
//
//
////rutas que devuelve la vista directo

//$portafolio=[
//    ['title'=>'Proyecto #1'],
//    ['title'=>'Proyecto #2'],
//    ['title'=>'Proyecto #3'],
//    ['title'=>'Proyecto #4']
//];
//route::view('/','home');//politicasd de provacidad, terminos y condiciones
//


App::setlocale('es');
Auth::routes(['register'=>false]);

//Route::get('/home', 'HomeController@index')->name('home');

route::view('/','home')->name('home');
route::view('/about','about')->name('about');
route::view('/contact','contact')->name('contact');
route::post('contact','MessagesController@store');
route::view('/slidebar','slidebar');
Route::resource('portafolio','ProjectController')
    ->names('projects')
    ->parameters(['portafolio'=>'project']);

Route::view('/slide', 'slide');
Route::view('/index', 'index');
Route::view('/form', 'form');

//route::get('/portafolio','ProjectController@index')->name('projects.index');
//route::get('/portafolio/crear','ProjectController@create')->name('projects.create');
//route::get('/portafolio/{project}/editar','ProjectController@edit')->name('projects.edit');
//route::patch('/portafolio/{project}','ProjectController@update')->name('projects.update');
//route::post('/portafolio','ProjectController@store')->name('projects.store');
//Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');
//Route::delete('/protafolio/{project}','ProjectController@destroy')->name('projects.destroy');





//explicacion controladores
//route::get('/contact','PortafolioController')->name('portafolio');

//route::get('/portafolio','ProjectController@index')->name('portafolio');
//route::view('/portafolio','portafolio')->name('portafolio');

///para generar llas rutas de todas las funciones del controlador
//route::resource('projects','ProjectController')->only('index','show');
//route::resource('projects','ProjectController')->except('index','show');





