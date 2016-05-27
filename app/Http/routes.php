<?php

Route::group(['middleware' => 'auth'], function () {
    

Route::get('/', ['as' => 'home', function () {
    return view('pages.home');
}]);

Route::resource('tasks', 'TasksController');


});