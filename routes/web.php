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
Route::get('servis', function () {
    return view('services.servis');
})->name('services.servis');

Route::get('servisgarage', function () {
    return view('services.servisgarage');
})->name('services.servisgarage');

Route::get('jualbeli', function () {
    return view('services.jualbeli');
})->name('services.jualbeli');

// ==========boxbox==========
Route::get('faq', function () {
    return view('boxbox.faq');
})->name('boxbox.faq');

Route::get('testimoni', function () {
    return view('boxbox.testimoni');
})->name('boxbox.testimoni');


// ========================================================ADMIN========================================================
Route::get('admin', function(){
    return view('admin.index');
});



Route::get('/', function () {
    return view('welcome');
});
