<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

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
        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('admin.post.show', $post->id);
    }
}

