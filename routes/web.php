<?php

use Illuminate\Support\Facades\Route;

// ========================================================PELANGGAN========================================================
//home
Route::get('home', function () {
    return view('home');
})->name('home');

// about us
Route::get('aboutus', function () {
    return view('aboutus');
})->name('aboutus');

//contact
Route::get('contact', function(){
    return view('contact');
})->name('contact');

// page services

// home service
Route::get('servis', function () {
    return view('services.servis');
})->name('services.servis');

// servis di bengkel
Route::get('servisgarage', function () {
    return view('services.servisgarage');
})->name('services.servisgarage');


// ========================================================ADMIN========================================================
Route::get('admin', function(){
    return view('admin.index');
});


Route::get('/', function () {
    return view('welcome');
});
