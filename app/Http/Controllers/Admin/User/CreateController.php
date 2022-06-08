<?php

namespace App\Http\Controllers\Admin\User;

class CreateController
{
    public function __invoke()
    {
        return view('admin.user.create');
    }
}

