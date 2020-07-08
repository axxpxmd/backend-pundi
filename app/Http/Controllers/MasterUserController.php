<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome
 *
 * @author Asip Hamdi
 * Github : axxpxmd
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// Models
use App\User;
use App\Models\Role;

class MasterUserController extends Controller
{
    protected $view = 'pages.masterUser.index';

    // List User
    public function user()
    {
        $section = 'user';
        $users = User::whererole_id(1)->whereNotIn('id', [Auth::user()->id])->get();

        return view($this->view, compact(
            'section',
            'users'
        ));
    }

    // List Admin
    public function admin()
    {
        $section = 'admin';
        $admins = User::whererole_id(2)->whereNotIn('id', [Auth::user()->id])->get();

        return view($this->view, compact(
            'section',
            'admins'
        ));
    }

    // Add Data
    public function tambah()
    {
        $section = 'tambah';
        $roles = Role::all();

        return view($this->view, compact(
            'section',
            'roles'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required | string | max:50',
            'username' => 'required | string | max:50',
            'email'    => 'required | string | email | unique:users',
            'password' => 'required | string',
            'nomor_hp' => 'required | string | max:20'
        ]);

        $name     = $request->name;
        $username = $request->username;
        $email    = $request->email;
        $password = $request->password;
        $role_id  = $request->role_id;
        $nomor_hp = $request->nomor_hp;

        $user = new User();
        $user->name     = $name;
        $user->username = $username;
        $user->email    = $email;
        $user->password = Hash::make($password);
        $user->role_id  = $role_id;
        $user->nomor_hp = $nomor_hp;
        $user->save();

        return redirect()
            ->route('master-user.tambah')
            ->withSuccess('Data berhasil ditambah !');
    }

    // Edit Data
    public function edit(Request $request)
    {
        $section = 'edit';
        $users = User::whereid($request->user)->first();

        $roles = Role::select('id', 'role')->get();

        return view($this->view, compact(
            'users',
            'section',
            'roles'
        ));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'     => 'required | string | max:50',
            'username' => 'required | string | max:50',
            'email'    => 'required | string | email | unique:users,email,' . $request->user,
            'nomor_hp' => 'required | string | max:20'
        ]);

        $user_id  = $request->user;
        $name     = $request->name;
        $username = $request->username;
        $email    = $request->email;
        $role_id  = $request->role_id;
        $nomor_hp = $request->nomor_hp;

        $user = User::findOrFail($user_id);
        $user->update([
            'name'     => $name,
            'username' => $username,
            'email'    => $email,
            'nomor_hp' => $nomor_hp,
            'role_id'  => $role_id
        ]);

        return redirect()
            ->route('master-user.edit', 'user=' . $user_id)
            ->withSuccess('Data berhasil diperbaharui !');
    }

    // Delete Data
    public function delete(Request $request)
    {
        User::whereid($request->user)->delete();

        return redirect()
            ->back()
            ->withSuccess('Data berhasil dihapus !');
    }
}
