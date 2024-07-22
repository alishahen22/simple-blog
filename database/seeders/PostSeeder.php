<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::insert([
            [
                'title' => 'مقالة 1',
                'body' => 'محتوى المقالة 1',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 2',
                'body' => 'محتوى المقالة 2',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 3',
                'body' => 'محتوى المقالة 3',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 4',
                'body' => 'محتوى المقالة 4',
                'user_id' => 1,
                'created_at' => now(),
            ] ,
            [
                'title' => 'مقالة 5',
                'body' => 'محتوى المقالة 5',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 6',
                'body' => 'محتوى المقالة 6',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 7',
                'body' => 'محتوى المقالة 7',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 8',
                'body' => 'محتوى المقالة 8',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 9',
                'body' => 'محتوى المقالة 9',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 10',
                'body' => 'محتوى المقالة 10',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 11',
                'body' => 'محتوى المقالة 11',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 12',
                'body' => 'محتوى المقالة 12',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 13',
                'body' => 'محتوى المقالة 13',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 14',
                'body' => 'محتوى المقالة 14',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'مقالة 15',
                'body' => 'محتوى المقالة 15',
                'user_id' => 1,
                'created_at' => now(),
            ]

        ]);
    }
}
