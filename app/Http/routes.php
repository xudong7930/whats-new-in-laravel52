<?php

// api auth
Route::group(['prefix'=>'api/v1', 'middleware'=>['auth:api']], function () {
    Route::get('user/{user}', function (App\User $user) {
        return $user;
    });

    Route::get('/', function() {
        // return Auth::user();
        return Auth::guard('api')->user();    
    });
});

// array validate
Route::get('array', 'EmailController@home')->name('emailarray');
Route::post('array-validate', 'EmailController@arrayvalidate')->name('emailarray-validate');
Route::post('invitation', 'EmailController@invite')->name('invite');

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

Route::auth();

Route::get('/home', 'HomeController@index');
