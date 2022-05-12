<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;

class EditController
{
    public function __invoke(Post $post)
    {
        $categories = Category::get();
        return view('admin.post.edit', compact('post', 'categories'));
    }
}

