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

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], function () {

    Route::get('/', 'IndexController@index');
    Route::get('/contact', 'ContactController@index');
    Route::post('/contact', 'ContactController@sendMail')->name('send.mail');
    Route::get('/aws-direct-connect', 'IndexController@awsDirectConnect');
    Route::get('/microsoft-azure-expressroute', 'IndexController@azureExpressRoute');
    Route::get('/google-cloud-interconnect', 'IndexController@googleCloudInterconnect');
    Route::get('/aws-public-support-statement', 'IndexController@awsPublicSupportStatement');
    Route::get('/policy-and-regulations', 'IndexController@policyAndRegulations');
    Route::get('/privacy-policy', 'IndexController@privacyPolicy');
    Route::get('/terms-of-use', 'IndexController@termsOfUse');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
});