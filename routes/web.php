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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('messages', function () {
    $data=request()->all();
    Mail::send("emails/message",$data, function($message) use($data){
        $message->from($data['email'],$data['name'])
        ->to('pruebafrancons@gmail.com','Fran')
        ->subject($data['subject']);
    }); 
    return back()->with('flash',$data['name'].', tu mensaje ha sido recibido');
})->name('messages');