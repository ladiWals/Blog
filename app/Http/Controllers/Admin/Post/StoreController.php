<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if (array_key_exists('tags', $data)) {
            $tags = $data['tags'];
            unset($data['tags']);
        } else {
            $tags = [];
        }
        $data['image'] = Storage::put('images', $data['image']);
        $data['preview_image'] = Storage::put('images', $data['preview_image']);
        $post = Post::create($data);
        $post->tags()->attach($tags);
        return redirect()->route('admin.post.index');
    }
}

