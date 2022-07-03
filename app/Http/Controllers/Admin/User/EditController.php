<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;

class EditController
{
    public function __invoke(User $user)
    {
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }
}

