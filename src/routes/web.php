<?php

Route::group(['middleware' => 'auth'], function () {
    Route::get('failedlogins',
        'outsmartit\failedlogins\FailedLoginsController@index');
});