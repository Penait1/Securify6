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
Route::group(['middleware' => 'auth:participant'], function () {
    Route::get("/challenge/thank-you", "Participant\SubmissionController@thanks")->name('submission_thanks');
    Route::get('/', 'Participant\HomeController@index')->name('participant_home');
    Route::get('/challenge/{id}', 'Participant\HomeController@challenge')->name('participant_challenge');

    Route::post("/challenge/{id}/submit", "Participant\SubmissionController@submit")->name('submit_submission');
});


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\HomeController@index')->name('admin_home');
    Route::resources(['challenges' => 'Admin\ChallengeController']);
    Route::resources(['submissions' => 'Admin\SubmissionController']);
    Route::get('challenge/{challenge}/submission/particpant/{participant}', 'Admin\ChallengeController@submissions')->name('user_submissions');

});


// Authentication Admin Routes...
Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\Auth\LoginController@login');
Route::post('admin/logout', 'Admin\Auth\LoginController@logout')->name('admin_logout');


// Authentication Participant Routes...
Route::get('login/{provider}/callback', 'Participant\Auth\LoginController@handleProviderCallback');
Route::get('login', 'Participant\Auth\LoginController@showLoginForm');
Route::get('login/{provider}', 'Participant\Auth\LoginController@login')->name('social.redirect');
Route::post('logout', 'Participant\Auth\LoginController@logout')->name('participant_logout');

