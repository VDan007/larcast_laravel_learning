<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/', function () {
       
    return view('posts',[
        'posts' => Post::with('category')->get()
    ]);
});

Route::get('/posts/{post}', function ($id){

    return view('post',[
        'post' => Post::findOrFail($id)
    ]);

});

Route::get('categories/{category:slug}', function(Category $category){

    return view('posts',[
        'posts' => $category->posts
    ]);
});