<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class DeleteController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}

