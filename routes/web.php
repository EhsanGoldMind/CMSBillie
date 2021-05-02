<?php

use App\Http\Middleware\VerifyTags;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/categories',\App\Http\Controllers\v1\CategoriesController::class)->middleware('auth:web');

Route::resource('/tags',\App\Http\Controllers\v1\TagController::class)->middleware(['auth:web']);

//Route::resource('/posts',\App\Http\Controllers\v1\PostController::class)->middleware(['auth:web','verifiedCategory','VerifyTags']);
Route::resource('/posts',\App\Http\Controllers\v1\PostController::class)->middleware(['auth:web','verifiedCategory']);

Route::get('/cms/trashed',[\App\Http\Controllers\v1\PostController::class,'trash'])->name('trash')->middleware('auth:web');

Route::put('restore/post/{post}',[\App\Http\Controllers\v1\PostController::class,'restore'])->name('restore.post')->middleware('auth:web');

Route::resource('/users',\App\Http\Controllers\v1\UserController::class)->middleware(['auth:web','AdminChek']);

Route::post('/users/{user}/MakeAdmin',[\App\Http\Controllers\v1\UserController::class,'makeAdmin'])->name('makeAdmin')->middleware(['auth:web','AdminChek']);

Route::get('/user/Upload/Avatar',[\App\Http\Controllers\v1\UploadAvatarController::class,'Upload'])->name('Upload')->middleware('auth:web');

Route::post('/user/Upload/Avatar/{user}',[\App\Http\Controllers\v1\UploadAvatarController::class,'UploadAvatar'])->name('UploadAvatar')->middleware('auth:web');

Route::get('/users/ShowMyProfile/{user}',[\App\Http\Controllers\v1\UserController::class,'profile'])->name('profile')->middleware('auth:web');

Route::resource('/main/post', \App\Http\Controllers\frontController::class)->only('index','show');

Route::get('/main/post/category/{category}',[\App\Http\Controllers\v1\PostController::class,'categorySection'])->name('categorySection');

Route::get('/main/post/tag/{tag}',[\App\Http\Controllers\v1\PostController::class,'tagSection'])->name('tagSection');

Route::get('/main/post/search', [\App\Http\Controllers\SearchController::class,'search'])->name('search');
//Route::get('/main/post/search', function (){
//    dd('ddd');
//})->name('search');
