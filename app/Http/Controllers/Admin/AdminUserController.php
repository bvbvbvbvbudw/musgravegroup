<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('musgravegroup.admin.pages.user.user', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('musgravegroup.admin.pages.user.user_edit', compact('user'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|string|in:admin,moderator',
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('admin.users.index')->with('status', 'User role updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('status', 'User deleted successfully!');
    }
}
