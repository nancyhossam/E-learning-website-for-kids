<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/profile',[App\Http\Controllers\FriendController::class,'search_friends']);

Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::post('savemath/{link}',[App\Http\Controllers\SubjectController::class,'savemath'])->name('savemath');
Route::get('/', function () {
    return view('home');
});

Route::get('/Math', [App\Http\Controllers\SubjectController::class,'Math'] );
Route::get('/Arabic', [App\Http\Controllers\SubjectController::class,'Arabic'] );
Route::get('/English', [App\Http\Controllers\SubjectController::class,'English'] );

Route::post('/search', [App\Http\Controllers\FriendController::class,'search']);
Route::post('follow/{id2}',[App\Http\Controllers\FriendController::class,'follow']);

//Route ::view('form','UserView');
//Route ::view('register','register');
// Route::post('/follow/{id}/(id}',[FriendController::class,'follow']);
// Route::post('register',[UserController::class,'create']);
// Route::post('submit',[UserController::class,'store']);
// route ::post('login',[UserController::class, 'search']);
// route ::post('search/{id}',[FriendController::class, 'search']);
// Route::get('subjects', [UserController:: class ,'index']);
// Route ::get('profile/edit/{id}',[UserController:: class ,'edit']);
// route ::get('delete/{id}',[UserController:: class ,'destroy']);
// Route::post('profile/edit/update/{id}', [UserController:: class ,'update']);
// //route :: post('edit/{id}', [UserController:: class ,'edit']);
// //Route ::view('profile/{id}','profile');
// Route ::view('profile/edit/','edit');
//Route::get('/s', 'UserController@edit')
## Crea
/*Route::get('/subjects/create', 'UserController@create')->name('subjects.create');
Route::post('/subjects/store', 'UserController@store')->name('subjects.store');

## Update
Route::get('/subjects/store/{id}', 'UserController@edit')->name('subjects.edit');
Route::post('/subjects/update/{id}', 'UserController@update')->name('subjects.update');

## Delete
Route::get('/subjects/delete/{id}', 'UserController@destroy')->name('subjects.delete');*/

Auth::routes();


