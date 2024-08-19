<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('musgravegroup.admin.pages.user.user', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('musgravegroup.admin.pages.user.user_edit', compact('user'));
    }

    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'role' => 'required|string|in:admin,moderator',
        ]);

        try {
            DB::beginTransaction();

            $user = User::findOrFail($id);
            $user->role = $validatedData['role'];
            $user->save();

            DB::commit();
            return redirect()->route('admin.users.index')->with('status', 'User role updated successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error updating user role: ' . $e->getMessage());
            return redirect()->route('admin.users.index')->withErrors('Failed to update user role.');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $user = User::findOrFail($id);
            $user->delete();

            DB::commit();
            return redirect()->route('admin.users.index')->with('status', 'User deleted successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error deleting user: ' . $e->getMessage());
            return redirect()->route('admin.users.index')->withErrors('Failed to delete user.');
        }
    }
}
