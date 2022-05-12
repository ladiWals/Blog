<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;

class IndexController
{
    public function __invoke()
    {
        $tags = Tag::paginate(10);
        return view('admin.tag.index', compact('tags'));
    }
}

