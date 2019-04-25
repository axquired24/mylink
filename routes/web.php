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

// Laravel routes
Auth::routes();

Route::get('/', function () {
    return redirect()->route("panel.dashboard");
});
Route::get('/home', function() {
    return redirect()->route("panel.dashboard");
});

Route::group([
    'prefix' => 'panel', 
    'middleware' => 'auth'
    ], function() {
        Route::get('dashboard', 'PanelController@dashboard')->name("panel.dashboard");

        // Link List
        Route::get('links', 'LinkController@list')->name("panel.links");

        // Add Link
        Route::get('links/add', 'LinkController@add')->name("panel.links.add");
        Route::post('links/add', 'LinkController@add')->name("panel.links.add-action");

        // Edit Link
        Route::get('links/{id}/edit', 'LinkController@edit')->name("panel.links.edit");
        Route::post('links/{id}/edit', 'LinkController@edit')->name("panel.links.edit-action");

        // Delete Link
        Route::get('links/{id}/delete', 'LinkController@delete')->name("panel.links.delete");
    }
);

Route::get('site/{sitename}', 'LinkController@publicSite')->name('public.site');
Route::get('link/{id}/click', 'LinkController@linkClick')->name('public.link.click');
