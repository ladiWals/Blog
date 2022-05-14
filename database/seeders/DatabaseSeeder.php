<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(30)->create();
        $tags = Tag::factory(50)->create();
        $posts = Post::factory(1000)->create();

        foreach ($posts as $post) {
            $tagPerPost = random_int(1, 10);
            $tagIds = $tags->random($tagPerPost)->pluck('id');
            $post->tags()->attach($tagIds);
        }
    }
}
