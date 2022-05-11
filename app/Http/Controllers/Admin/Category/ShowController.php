<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;

class ShowController
{
    public function __invoke(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }
}

