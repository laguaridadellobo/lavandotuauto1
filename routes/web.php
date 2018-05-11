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
Route::get('/', function () {
    return view('page');
});

Route::get('system', function () {
    return view('system.index');
});

Route::resource('system/highuser','highusercontroller');
Route::resource('system/highscrubber','scrubbercontroller');
//Route::post('system/highuser/upload','highusercontroller@dropzoneStore')
//->name('highuser.uploadimage');
Route::get('/system/highuser/image', function () {
    return view('image');
});

Route::get('/system/highscrubber/image', function () {
    return view('image');
});

Route::post('uploadimages','highusercontroller@dropzoneStore')
->name('highuser.uploadimage');

Route::post('uploadimages1','scrubbercontroller@dropzoneStore')
->name('Scrubber.uploadimage');

Route::get('checaimg',function(){
  $model = 'App\Highuser';
  $entity_id = '3';
  $images = App\images::where(['model' => $model, 'idmodel' => $entity_id])->get();
  dump($images);
});

//Route::resource('system/objectitem','objectitemcontroller');
Route::resource('system/enterprice','enterpricecontroller');
Route::resource('system/promotions','promotionscontroller');
Route::resource('system/washingtype','washingtypecontroller');

// Route::resource('usuarios', 'highusercontroller');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::Contacto
Route::resource('mail','MailController');
