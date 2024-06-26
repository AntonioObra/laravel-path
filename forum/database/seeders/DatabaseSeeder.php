<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        $posts = Post::factory(200)->recycle($users)->create();
        $comments = Comment::factory(100)->recycle($posts)->recycle($users)->create();

        User::factory()->has(Post::factory(20))->has(Comment::factory(83)->recycle($posts))->create([
            'name' => 'Antonio Obra',
            'email' => 'test@example.com',
        ]);
    }
}
