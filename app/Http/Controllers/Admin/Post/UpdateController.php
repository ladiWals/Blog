<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
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
        return redirect()->route('admin.post.show', $post->id);
    }
}

