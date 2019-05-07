<?php

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('failedlogins',
        'outsmartit\failedlogins\FailedLoginsController@index');
});