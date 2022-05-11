<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;

class IndexController
{
    public function __invoke()
    {
        $categories = Category::paginate(10);
        return view('admin.category.index', compact('categories'));
    }
}

