<?php

use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return response()->view('public.pages.404');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', function () {
    return view('public.category.category');
});


Route::get('/about', function () {
    return view('public.pages.about');
});


Route::get('/postdetails', function () {
    return view('public.category.postdetails');
});


Route::get('/posts', function () {
    return view('public.category.posts');
});


Route::get('/profile', function () {
    return view('public.pages.profile');
});

Route::get('/contact', function () {
    return view('public.pages.contact');
});

Route::get('/404', function () {
    return view('public.pages.404');
});

// admin

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/categories', function () {
        return view('admin.categories.index');
    });

    Route::get('/posts', function () {
        return view('admin.posts.index');
    });
});