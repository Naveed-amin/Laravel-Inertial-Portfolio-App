<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('portfolio',function(){
    return Inertia::render('Portfolio/Master');
});

Route::get('portfolio/welcome',function(){
    return Inertia::render('Portfolio/Components/Welcome');
});
Route::get('portfolio/about',function(){
    return Inertia::render('Portfolio/Components/About');
});
Route::get('portfolio/services',function(){
    return Inertia::render('Portfolio/Components/Services');
});
Route::get('portfolio/resume',function(){
    return Inertia::render('Portfolio/Components/Resume');
});
Route::get('portfolio/works',function(){
    return Inertia::render('Portfolio/Components/Works');
});
Route::get('portfolio/testimonials',function(){
    return Inertia::render('Portfolio/Components/Testimonials');
});
Route::get('portfolio/contact',function(){
    return Inertia::render('Portfolio/Components/Contact');
});

