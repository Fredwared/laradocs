<?php

/*
|--------------------------------------------------------------------------
| Administration Web Routes
|--------------------------------------------------------------------------
|
| This file contains all ADMINISTRATION routes.
|
*/

Route::group(['prefix' => 'administration', 'namespace' => 'Administration'], function() {
    // DASHBOARD
    Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function() {
        Route::get('')->uses('DashboardController@index')->name('administration.dashboard');
    });

    // SETTINGS
    Route::group(['prefix' => 'settings'], function() {
        Route::get('')->uses('SettingsController@index')->name('administration.settings');
        Route::post('update')->uses('SettingsController@update')->name('administration.settings.save');
        Route::get('destroy/token')->uses('SettingsController@destroyToken')->name('administration.settings.destroy.token');
    });

    // VERSIONS
    Route::group(['prefix' => 'version', 'namespace' => 'Version'], function() {
        Route::get('')->uses('VersionController@index')->name('administration.versions');
        Route::get('create')->uses('VersionController@create')->name('administration.versions.create');
        Route::post('store')->uses('VersionController@store')->name('administration.versions.store');
        Route::get('edit/{version}')->uses('VersionController@edit')->name('administration.versions.edit');
        Route::post('update/{version}')->uses('VersionController@update')->name('administration.versions.update');
        Route::get('destroy/{version}')->uses('VersionController@destroy')->name('administration.versions.destroy');
        Route::get('dashboard/{version}')->uses('VersionController@dashboard')->name('administration.versions.dashboard');
    });

    // DOCUMENTS
    Route::group(['prefix' => 'documents', 'namespace' => 'documents'], function() {
        Route::get('')->uses('DocumentsController@index')->name('administration.documents');
        Route::get('version/{version}')->uses('DocumentsController@version')->name('administration.documentation.version');
        Route::get('create/{version?}')->uses('DocumentsController@create')->name('administration.documentation.create');
        Route::post('store')->uses('DocumentsController@store')->name('administration.documentation.store');
        Route::get('edit/{document}')->uses('DocumentsController@edit')->name('administration.documentation.edit');
        Route::post('update/{document}')->uses('DocumentsController@update')->name('administration.documentation.update');
        Route::get('destroy/{document}')->uses('DocumentsController@destroy')->name('administration.documentation.destroy');
    });

    // NAVIGATION
    Route::group(['prefix' => 'navigation'], function() {
        Route::get('view/{version}')->uses('NavigationController@index')->name('administration.navigation');

        Route::get('create/section/{version}')->uses('NavigationController@createSection')->name('administration.navigation.create.section');
        Route::post('store/section')->uses('NavigationController@storeSection')->name('administration.navigation.store.section');
        Route::get('edit/section/{navigation}')->uses('NavigationController@editSection')->name('administration.navigation.edit.section');
        Route::post('update/section')->uses('NavigationController@updateNavigation')->name('administration.navigation.update.section');

        Route::get('create/document/{navigation}')->uses('NavigationController@createDocument')->name('administration.navigation.create.document');
        Route::post('store/document')->uses('NavigationController@storeDocument')->name('administration.navigation.store.document');
        Route::get('edit/document/{navigation}')->uses('NavigationController@editDocument')->name('administration.navigation.edit.document');
        Route::post('update/document')->uses('NavigationController@updateNavigation')->name('administration.navigation.update.document');

        Route::get('destroy/{navigation}')->uses('NavigationController@destroy')->name('administration.navigation.destroy');

        Route::get('rank/up/{navigation}')->uses('NavigationController@rankUp')->name('administration.navigation.rank.up');
        Route::get('rank/down/{navigation}')->uses('NavigationController@rankDown')->name('administration.navigation.rank.down');
    });

    // IMPORT
    Route::group(['prefix' => 'import', 'namespace' => 'Imports'], function() {
        Route::get('import/github/{version?}')->uses('GithubController@index')->name('administration.import.github');
        Route::post('import/github/store')->uses('GithubController@store')->name('administration.import.github.store');
    });
});