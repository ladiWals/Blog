<?php

namespace App\Service;

use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store(array $data): Post
    {
        try {

            if (array_key_exists('tags', $data)) {
                $tags = $data['tags'];
                unset($data['tags']);
            } else {
                $tags = [];
            }
            if (array_key_exists('image', $data)) {
                $data['image'] = Storage::disk('public')
                    ->put('images', $data['image']);
            }

            if (array_key_exists('preview_image', $data)) {
                $data['preview_image'] = Storage::disk('public')
                    ->put('images', $data['preview_image']);
            }
            $post = Post::create($data);
            $post->tags()->attach($tags);
        } catch (Exception) {
            abort(500);
        }

        return $post;
    }

    public function update(Post $post, array $data): Post
    {
        try {
            if (array_key_exists('tags', $data)) {
                $tags = $data['tags'];
                unset($data['tags']);
            } else {
                $tags = [];
            }

            if (array_key_exists('image', $data)) {
                $data['image'] = Storage::disk('public')
                    ->put('images', $data['image']);
            }

            if (array_key_exists('preview_image', $data)) {
                $data['preview_image'] = Storage::disk('public')
                    ->put('images', $data['preview_image']);
            }

            $post->update($data);
            $post->tags()->sync($tags);
        } catch (Exception) {
            abort(500);
        }

        return $post;
    }
}
