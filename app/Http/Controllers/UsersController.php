<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;


class UsersController extends Controller
{


    public function edit(User $user)
    {
    $roles = Role::all();
    return view('users.edit', compact('user', 'roles'));
    }
    
    public function assignRole(Request $request, User $user)
    {
        $roleName = $request->input('role');
        $role = Role::where('name', $roleName)->firstOrFail();
        $user->assignRole($role);
        return redirect()->back()->with('success', "Role '{$role->name}' assigned successfully");
    }
}
