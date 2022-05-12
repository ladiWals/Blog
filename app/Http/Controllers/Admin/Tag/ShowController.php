<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;

class ShowController
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tag.show', compact('tag'));
    }
}

