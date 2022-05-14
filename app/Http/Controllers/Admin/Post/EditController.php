<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController
{
    public function __invoke(Post $post)
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }
}

