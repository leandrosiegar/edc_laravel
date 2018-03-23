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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PortadaController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('peliculas', 'PeliculasController');
Route::resource('cineastas', 'CineastasController');
Route::resource('sliders', 'SlidersController');


// *********** BUSCAR
Route::get('buscar/{item}', 'BuscarController@buscar')->name('buscar');

// *********** COLABORADOR
Route::resource('colaborador', 'ColaboradorController');
Route::post('colaborador.checkPW', 'ColaboradorController@checkPW')->name('colaborador.checkPW');
Route::get('/borrar-colaborador/{id}', 'ColaboradorController@borrarColaborador')->name('borrar-colaborador');

// *********** CRITICAS
Route::resource('criticas', 'CriticasController')->middleware('auth', ['except' => ['frontCriticasList']]);
Route::get('/borrar-critica/{id}', 'CriticasController@borrarCritica')->name('borrar-critica');
Route::get('front.criticas-list', 'CriticasController@frontCriticasList')->name('front.criticas-list');

// ************ YOUTUBE
Route::resource('youtube', 'YoutubeController')->middleware('auth', ['except' => ['front.youtube-pel-list']]);
Route::get('youtube.set-youtube', 'YoutubeController@setYoutube')->name('youtube.set-youtube');
Route::post('youtube.store_setYoutube', 'YoutubeController@storeSetYoutube')->name('youtube.store_setYoutube');
Route::get('youtube.list-histyoutube', 'YoutubeController@listHistyoutube')->name('youtube.list-histyoutube');
Route::get('youtube.edit-histyoutube/{id}', 'YoutubeController@editHistyoutube')->name('youtube.edit-histyoutube');
Route::post('youtube.update-hist-youtube', 'YoutubeController@updateHistyoutube')->name('youtube.update-hist-youtube');
Route::resource('artYoutube', 'artYoutubeController');
Route::get('front.youtube-pel-list', 'YoutubeController@frontYoutubePelList')->name('front.youtube-pel-list');
Route::get('front.youtube-cineastas-list', 'YoutubeController@frontYoutubeCineastasList')->name('front.youtube-cineastas-list');



// ************ DOBLAJE
Route::resource('doblaje', 'DoblajeController');
Route::get('/borrar-doblaje/{id}', 'DoblajeController@borrarDoblaje')->name('borrar-doblaje');
Route::get('front.doblaje-list', 'DoblajeController@frontDoblajeList')->name('front.doblaje-list');

// ************ GARCI
Route::resource('garci', 'GarciController');
Route::get('front.garci-list', 'GarciController@frontGarciList')->name('front.garci-list');

// ************ MUSICA
Route::resource('noesmusica', 'NoesmusicaController');
Route::get('front.noesmusica-list', 'NoesmusicaController@frontNoesmusicaList')->name('front.noesmusica-list');
Route::get('/borrar-noesmusica/{id}', 'NoesmusicaController@borrarNoesmusica')->name('borrar-noesmusica');

// ************ DOCUMENTAL
Route::resource('documental', 'DocumentalController');
Route::get('front.documental-list', 'DocumentalController@frontDocumentalList')->name('front.documental-list');
Route::get('/borrar-documental/{id}', 'DocumentalController@borrarDocumental')->name('borrar-documental');

// *********** SLIDERS
Route::get('front.sliders-list', 'SlidersController@frontYoutubeCineastasList')->name('front.sliders-list');


Route::get('/peliculas-del-cineasta/{id}', 'CineastasController@pelDelCineasta')->name('peliculas-del-cineasta');



Route::get('/borrar-cineasta/{id}', 'CineastasController@borrarCineasta')->name('borrar-cineasta');
Route::get('/borrar-pelicula/{id}', 'PeliculasController@borrarPelicula')->name('borrar-pelicula');
Route::get('/borrar-slider/{id}', 'SlidersController@borrarSlider')->name('borrar-slider');
Route::get('/borrar-pel-youtube/{id}', 'YoutubeController@borrarPelYoutube')->name('borrar-pel-youtube');
Route::get('/borrar-art-youtube/{id}', 'artYoutubeController@borrarArtYoutube')->name('borrar-art-youtube');
Route::get('/borrar-vid-garci/{id}', 'GarciController@borrarVidGarci')->name('borrar-vid-garci');
Route::get('/borrar-hist-youtube/{id}', 'YoutubeController@borrarHistYoutube')->name('borrar-hist-youtube');

Route::group(['prefix' => 'api'], function() {
    Route::group(['prefix' => 'v1'], function() {
        Route::get('create', 'GarciController@create');
        Route::get('index', 'GarciController@index');
    });
    Route::group(['prefix' => 'v2'], function() {
        Route::get('create', 'YoutubeController@create');
        Route::get('index', 'YoutubeController@index');
    });
});



// Route::get('/language/{id}', 'LanguageController@index')->name('cambiar_idioma');

// Route::post("/cambiar-idioma", "AjaxController@index");

Route::get('ajaxRequest', 'AjaxController@ajaxRequest');
Route::post('ajaxRequest', 'AjaxController@ajaxRequestPost');

