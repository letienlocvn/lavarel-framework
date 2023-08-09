<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/home', '/admin');

Route::get('/user', function () {
    $user = new User();
    dd($user);
});

Route::get('/home', function () {
    return view('home');
});

//Route view

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
Route::view('/user', 'home');

//Route Parameter
//Optional

Route::get('/user/{name?}', function ($name = null) {
    return $name;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return $name;
});

//Regular expression constraint 

Route::get('/regular/{name}', function ($name) {
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('/user/{id}/{name}', function ($id, $name) {
    return $id . " - " . $name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//Name route
Route::get('/user/profile', function () {
    return "Welcome to your user profile!";
})->name('profile');


//Test username
Route::get('/resource', function () {
    return view('resource');
});

Route::post('/resource', function () {
    return "Chúc mừng bạn đã kiếm được phương thức POST";
});

Route::get('post/{id}/comment/{commentId}', function($id, $commentId) {
    $content = "Test validate with arguments: ";
    $content .= "Post id: " . $id . "<br/>";
    $content .= "Comment id ". $commentId ."<br/>";
    return $content;
})->where(
    ['id' => "[0-5]", "commentId" => "[0-4]"]
);


