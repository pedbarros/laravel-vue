<?php

Route::get('/', 'SignaturesController@index')->name('home');


Route::get('sign', 'SignaturesController@create')->name('sign');