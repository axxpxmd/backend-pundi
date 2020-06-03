<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\User;

class MasterUserController extends Controller
{
    public function user()
    {
        $role = 'user';

        $users = User::whererole_id(1)->get();

        return view('pages.masterUser.index', compact(
            'role',
            'users'
        ));
    }

    public function admin()
    {
        $role = 'admin';

        $admins = User::whererole_id(2)->get();

        return view('pages.masterUser.index', compact(
            'role',
            'admins'
        ));
    }
}
