<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;

class DeleteController
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
