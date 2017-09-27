<?php
Route::get('user/{user}', function(App\User $user) {
    return $user;
});

Route::get('/', function () {
    return view('welcome');
});
