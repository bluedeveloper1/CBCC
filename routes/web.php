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

Auth::routes();
/* CoreUI templates */

Route::middleware('auth')->group(function() {
    Route::view('/', 'main.home');
    // Section CoreUI elements
    Route::view('/sample/dashboard','samples.dashboard');
    Route::view('/sample/buttons','samples.buttons');
    Route::view('/sample/social','samples.social');
    Route::view('/sample/cards','samples.cards');
    Route::view('/sample/forms','samples.forms');
    Route::view('/sample/modals','samples.modals');
    Route::view('/sample/switches','samples.switches');
    Route::view('/sample/tables','samples.tables');
    Route::view('/sample/tabs','samples.tabs');
    Route::view('/sample/icons-font-awesome', 'samples.font-awesome-icons');
    Route::view('/sample/icons-simple-line', 'samples.simple-line-icons');
    Route::view('/sample/widgets','samples.widgets');
    Route::view('/sample/charts','samples.charts');

    Route::view('/main/home','main.home');
    Route::view('/main/members','main.members');
    Route::view('/main/ministries','main.ministries');
    Route::view('/main/transactions','main.transactions');
    Route::view('/main/view','main.view');
    Route::view('/main/expenses','main.expenses');

    Route::view('/main/member','main.member');
});
// Section Pages
Route::view('/sample/error404','errors.404')->name('error404');
Route::view('/sample/error500','errors.500')->name('error500');
//home-ministry
Route::get('/main/ministries','HomeController@ministries');
//add-ministry
Route::post('/insert','HomeController@add_ministry');
//delete-ministry
Route::get('/delete/{id}','HomeController@delete_ministry');
//show-profile-ministry
Route::get('/show-profile/{id}','HomeController@show_profile_ministry');
//resource
Route::resource('ministries','HomeController');
