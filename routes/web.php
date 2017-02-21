<?php

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

// 查看命令：php artisan help make:controller

//1. 创建控制器及模型: php artisan make:controller PostController --model=Post

//2. 创建表命令:php artisan make:migration create_posts_table --create=posts

//3.执行：php artisan migrate


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('posts/{post}','PostController@show');

/*Route::get('/',function() {
    $posts = App\Post::all();
    return $posts;
});*/

/*Route::get('/', function () {
    $posts = App\Post::all();
    return $posts->each(function ($post){
        $post->archive();
    });
});*/

/*Route::get('/', function () {
    $posts = App\Post::all();
    return $posts->each->publish();
});*/

/*Route::get('/', function () {
    $posts = App\Post::all();
    return $posts->map(function ($post){
       return $post->title;
    });
});*/

Route::get('/', function () {
    $posts = App\Post::all();
    return $posts->map->title;
});

