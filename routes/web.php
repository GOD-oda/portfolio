<?php

Route::get('/', function () {
    return view('index');
});

Route::post('send-mail', 'ContactController@sendMail');
