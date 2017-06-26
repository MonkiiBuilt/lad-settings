<?php
/**
 * @author Jonathon Wallen
 * @date 26/6/17
 * @time 2:17 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

Route::group(['prefix' => 'admin', 'namespace' => 'MonkiiBuilt\LadSettings', 'middleware' => ['laravel-administrator-menus', 'web']], function () {

    Route::get('settings/create', ['as' => 'lad-settings.create', 'uses' => 'Controllers\AdminController@create']);

    Route::get('settings/{id}/edit', ['as' => 'lad-settings.edit', 'uses' => 'Controllers\AdminController@edit']);

    Route::post('settings', ['as' => 'lad-settings.store', 'uses' => 'Controllers\AdminController@store']);

    Route::put('settings', ['as' => 'lad-settings.update', 'uses' => 'Controllers\AdminController@update']);

    Route::delete('settings', ['as' => 'lad-settings.destroy', 'uses' => 'Controllers\AdminController@destroy']);
});
