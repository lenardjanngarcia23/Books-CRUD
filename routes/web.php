<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::resource('/users', UserController::class);
Route::resource('/posts', PostController::class);

// Route::get('/make', function() {
//     $user = User::find(1);
//     $post = Post::create(['title'=>'The great gatsby', 'body'=>'Novel']);
//     $tag1 = Tag::find(2);

//     $post->tags()->save($tag1);

//     // $photo = Photo::create(['name'=>'Scream']);
//     // $tag2 = Tag::find(3);

//     // $photo->tags()->save($tag2);
// });
// Route::middleware(['middleware'=>'web'])->group(function () {
//     Route::get('/posts', PostController::class);
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
