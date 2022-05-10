<?php


namespace App\Http\Controllers\Admin\Main;


class IndexController
{
    public function __invoke()
    {
        return view('admin.main.index');
    }
}
