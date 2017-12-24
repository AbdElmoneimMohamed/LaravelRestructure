<?php
//Route::group(array('namespace' => 'modules\Backend\Users\Controllers'), function() {
Route::get('users/profile', 'UserController@profile');
Route::resource('users', 'UserController');
//});