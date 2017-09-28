<?php
// api rate limit
Route::get('/api/search/{item}', function($item) {
    return [
        'result' => $item
    ];
})->middleware('throttle:3');

// implict route binding
Route::get('user/{user}', function(App\User $user) {
    return $user;
});

Route::get('/', function () {
    return view('welcome');
});
