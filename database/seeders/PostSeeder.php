<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Belajar Laravel Dasar',
                'body' => 'Ini adalah konten dari post pertama tentang Laravel.',
                'slug' => 'belajar-laravel-dasar',
                'author' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mengenal Routing di Laravel',
                'body' => 'Artikel ini menjelaskan konsep routing pada Laravel.',
                'slug' => 'mengenal-routing-laravel',
                'author' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cara Membuat Seeder',
                'body' => 'Tutorial ini akan membahas bagaimana membuat dan menjalankan seeder.',
                'slug' => 'cara-membuat-seeder',
                'author' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
