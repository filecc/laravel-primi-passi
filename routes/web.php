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
    $links = [
        'home' => '/',
        'contacts' => '/contacts',
        'about' => '/about'
    ];
    $data = ['links' => $links];
    return view('welcome', $data);
});

Route::get('/contacts', function () {
    $links = [
        'home' => '/',
        'contacts' => '/contacts',
        'about' => '/about'
    ];
    $data = ['links' => $links];
    return view('contacts', $data);
});

Route::get('/about', function () {
    $links = [
        'home' => '/',
        'contacts' => '/contacts',
        'about' => '/about'
    ];
    $data = ['links' => $links];
    return view('about', $data);
});
