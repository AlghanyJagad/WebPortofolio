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


Route::get('/', 'HomeController@index')->name('index');
Route::get('/resume', 'HomeController@resume')->name('resume');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/contact', 'HomeController@contact')->name('contact');


Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'ProfilController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
 
});

Route::resource('profils','ProfilController');
Route::resource('educations','EducationController');
Route::resource('experiences','ExperienceController');
Route::resource('skills','SkillController');
Route::resource('resumes','ResumeController');