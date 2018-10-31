<?php

Route::group(['middleware' => 'web', 'prefix' => 'sitamprueba', 'namespace' => 'Modules\SitamPrueba\Http\Controllers'], function()
{
    Route::get('/', 'SitamPruebaController@index');
});
