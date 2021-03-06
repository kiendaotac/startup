<?php

Route::group(['namespace' => 'Botble\Team\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('core.base.general.admin_dir'), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'teams', 'as' => 'team.'], function () {
            Route::resource('', 'TeamController')->parameters(['' => 'team']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'TeamController@deletes',
                'permission' => 'team.destroy',
            ]);
        });
    });

});
