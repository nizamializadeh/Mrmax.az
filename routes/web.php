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




//backend
Route::post('set-status','backend\SliderController@setStatus')->name('setStatus');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin','prefix' => 'admin'],function (){


    Route::delete('/sliderimg{image}','backend\SliderController@sliderimg')->name('sliderimg');
    Route::delete('/homeimg{image}','backend\HomeController@homeimg')->name('homeimg');
    Route::post('/sliderupload','backend\SliderController@sliderupload')->name('sliderupload');
    Route::post('/homeupload','backend\HomeController@homeupload')->name('homeupload');


    Route::resources([
        'slider' => 'backend\SliderController',
        'home' => 'backend\HomeController',
        'partner' => 'backend\PartnerController',
        'video' => 'backend\VideoController',
        'social' => 'backend\SocialController',
    ]);
});

//forntend
Route::get('/','frontend\SiteController@index')->name('index');
Route::get('/project','frontend\SiteController@project')->name('project');
Route::get('about', function () {return view('frontend.about');});
Route::get('contact', function () {return view('frontend.contact');});
//Route::get('projectsingle[id]', function () {return view('frontend.projectsingle');});
Route::get('projectsingle{id}','frontend\SiteController@projectsingle')->name('projectsingle');
Route::get('homesingle{id}','frontend\SiteController@homesingle')->name('homesingle');

