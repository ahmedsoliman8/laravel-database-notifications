<?php

use App\App\Notifications\Models\DatabaseNotification;
use App\Models\Comment;
use App\Models\User;
use App\Notifications\Auth\UserJoined;
use App\Notifications\Comments\CommentCreated;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/notification', function () {
  //  $notification= DatabaseNotification::find('181ceb46-3872-4f5e-bcd8-a807c6727abf');
    //return $notification->models;

    $user=User::find(1);
   // $comment=Comment::withTrashed()->find(1);
    $user->notify(new UserJoined($user));

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
