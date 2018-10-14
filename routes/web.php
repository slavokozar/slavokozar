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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/cv', 'CVController@index')->name('cv');
Route::get('/projekty', 'ProjectController@index')->name('projects');
Route::get('/clanky', 'ArticleController@index')->name('articles');
Route::get('/kontakt', 'ContactController@index')->name('contact');

Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/','DashController@index');

    Route::group(['prefix' => '/cv', 'namespace' => 'CV'], function() {
        Route::resource('certifications', 'CertificationController')->except(['show']);
        Route::resource('education', 'EducationController')->except(['show']);
        Route::resource('experience', 'ExperienceController')->except(['show']);
        Route::resource('skills', 'SkillController')->except(['show']);
    });

    Route::resource('article', 'ArticleController')->except(['show']);
    Route::resource('project', 'ProjectController')->except(['show']);
});