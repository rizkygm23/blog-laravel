<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// class Post {
//     public static function all() {
//         return     [
//             [
//                 'id' => 1,
//                 'title' => 'Judul Post Pertama',
//                 'slug' => 'judul-post-pertama',
//                 'author' => 'Muhammad Rizky',
//                 'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae est similique inventore suscipit doloremque! Reprehenderit eaque, sint distinctio voluptate, ratione rerum ipsum accusantium porro aliquid in esse voluptas magnam dolorem!'
//             ],
//             [
//                 'id' => 2,
//                 'slug' => 'judul-post-kedua',
//                 'title' => 'Judul Post Kedua',
//                 'author' => 'Muhammad Rizky',
//                 'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae est similique inventore suscipit doloremque! Reprehenderit eaque, sint distinctio voluptate, ratione rerum ipsum accusantium porro aliquid in esse voluptas magnam dolorem!'
//             ]
//         ];   
//     }
// }


Route::get('/', function () {
    return view('home', [ 'title' => 'Home']);
});
Route::get('/about', function () {
    return view('about',['name' => 'Muhammad Rizky', 'email' => 'L0yFt@example.com', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'blog','posts' => Post::all()]);
});



Route::get('/post/{post:slug}', function( Post $post) {
    

   


    if (!$post) {
        abort(404, 'Post not found');
    }

    // dd($post);   `   
    return view('post', [
        'post' => $post,
        'title' =>'single post'
    ]);
});
Route::get('/author/{user}', function( User $user) {
    

   


    if (!$user) {
        abort(404, 'Post not found');
    }

    // dd($post);   `   
    return view('posts', [
        'posts' => $user->posts,
        'title' =>'artikel by '.$user->name
    ]);
});


Route::get('/contact', function () {
    return view('contact',[
        'name' => 'Muhammad Rizky',
        'email' => 'L0yFt@example.com',
        'phone' => '08123456789',
        'title' => 'Contact'
    
    
    ]);

});
