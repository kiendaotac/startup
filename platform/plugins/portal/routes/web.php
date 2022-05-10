<?php

Route::group(['namespace' => 'Botble\Portal\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('core.base.general.admin_dir'), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'portals', 'as' => 'portal.'], function () {
            Route::resource('', 'PortalController')->parameters(['' => 'portal']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'PortalController@deletes',
                'permission' => 'portal.destroy',
            ]);
        });
    });

});
