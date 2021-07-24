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
    return view('clients.index');
});
Route::get('/buro', function () {
    return view('clients.bureau');
});

Route::get('/event', function () {
    return view('clients.events');
});
Route::get('/event_show', function () {
    return view('clients.events_show');
});
Route::get('/about', function () {
    return view('clients.abouts');
});

Route::get('/contact', function () {
    return view('clients.contacts');
});

Route::get('/login', function () {
    return view('clients.login');
});


Route::get('/admin_home', function () {
    return view('admins.dashboard');
});