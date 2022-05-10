<?php

namespace App\Http\Controllers\Admin\Category;

class IndexController
{
    public function __invoke()
    {
        return view('admin.category.index');
    }
}

