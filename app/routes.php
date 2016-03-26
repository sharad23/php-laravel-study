<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');
Route::get('/test-pdf',function(){

      $html = '<html><body>'
            . '<p>Put your html here, or generate it with your favourite '
            . 'templating system.</p>'
            . '</body></html>';
      
      return PDF::load($html,'A4','portrait')->show();
      
});
Route::get('/test-image',function(){

    $img = Image::make('test.jpg')->resize(300, 200);
    return $img->response('jpg');
});
