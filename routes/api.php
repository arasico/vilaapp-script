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
Route::namespace('Api\V1')->prefix('/v1')->group(function () {

    //Newsletter
    Route::resource('newsletter', 'NewsletterController', ['only' => ['store']]);

    //Contact Us
    Route::resource('contactUs', 'ContactUsController', ['only' => ['store']]);

    //Country
    Route::resource('country', 'CountryController', ['only' => ['index']]);

    //Auth otp
    Route::post('auth/otp/sms', 'Auth\ZamanakController@postSmsRequest');
    Route::post('auth/otp/call', 'Auth\ZamanakController@postCallRequest');
    Route::post('auth/otp/verify', 'Auth\ZamanakController@postVerifyRequest');

    //Auth email
    Route::post('auth/email/login', 'Auth\EmailController@postLogin');
    Route::post('auth/email/register', 'Auth\EmailController@postRegister');

});