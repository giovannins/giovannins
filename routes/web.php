<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/about', function () {
    return view('about', [
        'age' => (date('Y') - 2000)
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'posts' => Post::all()
    ]);
});

Route::get('/blog/{id}', function ($id) {
    return view('post', [
        'post' => Post::find($id)
    ]);
});
