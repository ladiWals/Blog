<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $tags = Tag::get();
        $categories = Category::get();
        return view('admin.post.create', compact('tags', 'categories'));
    }
}

