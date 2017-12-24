<?php
//Route::group(array('namespace' => 'modules\Backend\Users\Controllers'), function() {
Route::resource('users', 'UserController');

Route::get('users/{id}/profile', 'UserController@profile');
//});