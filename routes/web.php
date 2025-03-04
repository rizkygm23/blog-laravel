<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [ 'title' => 'Home']);
});
Route::get('/about', function () {
    return view('about',['name' => 'Muhammad Rizky', 'email' => 'L0yFt@example.com', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'posts' => [
            [   'id' => 1,
                'slug' => 'judul-post-pertama',
                'title' => 'Judul Post Pertama',
                'author' => 'Muhammad Rizky',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae est similique inventore suscipit doloremque! Reprehenderit eaque, sint distinctio voluptate, ratione rerum ipsum accusantium porro aliquid in esse voluptas magnam dolorem!'
            ],
            [   'id' => 2,
                'slug' => 'judul-post-kedua',
                'title' => 'Judul Post Kedua',
                'author' => 'Muhammad Rizky',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae est similique inventore suscipit doloremque! Reprehenderit eaque, sint distinctio voluptate, ratione rerum ipsum accusantium porro aliquid in esse voluptas magnam dolorem!'
            ]
            ],
            'title' => 'Blog'
    ]); 
});



Route::get('/post/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Muhammad Rizky',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae est similique inventore suscipit doloremque! Reprehenderit eaque, sint distinctio voluptate, ratione rerum ipsum accusantium porro aliquid in esse voluptas magnam dolorem!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-post-kedua',
            'title' => 'Judul Post Kedua',
            'author' => 'Muhammad Rizky',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae est similique inventore suscipit doloremque! Reprehenderit eaque, sint distinctio voluptate, ratione rerum ipsum accusantium porro aliquid in esse voluptas magnam dolorem!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) {
        abort(404, 'Post not found');
    }

    // dd($post);
    return view('post', [
        'post' => $post,
        'title' =>'single post'
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
