<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return     [
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
    }

    public static function find($slug) {
        return Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;
            
        });
    }
}
