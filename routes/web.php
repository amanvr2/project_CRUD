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
    return view('index');
});

Route::get('/signup', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});


Route::post('/signup/save','RegisterController@validateform');
Route::post('/signup/save','RegisterController@insert');

Route::post('/login','LoginController@login');

 

 Route::get('/sendbasicemail','MailController@basic_email');
Route::get('/sendhtmlemail','MailController@html_email');
Route::get('/sendattachmentemail','MailController@attachment_email');



Route::get('/view-records','ViewController@view'); // for view of existing users //


Route::get('/edit-records','UpdateController@index'); // for options for edit and delete for each user //
Route::get('/update/{id}','UpdateController@show'); // page for edit the first-name //

Route::post('/edit/{id}','UpdateController@edit'); // when record gets updated successfully //

Route::get('edit-records','DeleteController@index'); // for options for edit and delete for each user //
Route::get('delete/{id}','DeleteController@destroy'); // when record gets deleted successfully //

Route::get('/upload', function () {                     // upload section view
    return view('upload');
});
Route::post('/store','UploadController@store');     // when file gets uploaded successfully //

Route::get('/contactus', function () {              // contact-us page view //
    return view('contact');
});

 
 Route::post('/contactus/go','SendemailController@send');   // when mail got sent //


