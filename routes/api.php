<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => ['cors', 'json.response']], function () {

    Route::post('login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('register','Auth\ApiAuthController@register')->name('register.api');
    Route::post('logout', 'Auth\ApiAuthController@logout')->name('logout.api');

//COMPANY ROUTES

//list Companies

Route::get('companies', 'CompanyController@index');

//list single Company
Route::get('company/{id}', 'CompanyController@show');

//create new Company
Route::post('company', 'CompanyController@store');

//Update Company
Route::put('company', 'CompanyController@store');

//Delete Company
Route::delete('company/{id}', 'CompanyController@destroy');

//GIGS ROUTES

//List all Gigs
Route::get('gigs', 'GigController@index');

//List single Gig
Route::get('gig/{id}', 'GigController@show');

//create Gig
Route::post('gigs', 'GigController@store');

//Update Gig
Route::put('gig', 'GigController@store');

//Delete Gig
Route::delete('gig/{id}', 'GigController@destroy');



});

