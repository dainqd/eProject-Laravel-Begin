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
    return view('index');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/footer', function () {
    return view('footer');
});
// header
Route::get('/faculty', function () {
    return view('faculty');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/event-details', function () {
    return view('event-details');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/course-detail-reactjs', function () {
    return view('course-detail-reactjs');
});
Route::get('/course-detail-php-laravel', function () {
    return view('course-detail-php-laravel');
});
Route::get('/course-detail-php-laravel', function () {
    return view('header');
});
Route::get('/course-detail-php-laravel', function () {
    return view('footer');
});
Route::get('/course-detail-photography', function () {
    return view('course-detail-photography');
});
Route::get('/course-detail-design', function () {
    return view('course-detail-design');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog-single3', function () {
    return view('blog-single3');
});
Route::get('/blog-single2', function () {
    return view('blog-single2');
});
Route::get('/blog-single1', function () {
    return view('blog-single1');
});
Route::get('/blog-home', function () {
    return view('blog-home');
});
Route::get('/admissions', function () {
    return view('admissions');
});
Route::get('/about', function () {
    return view('about');
});
// Auth
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});

