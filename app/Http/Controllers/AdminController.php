<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.dashboard.index', compact('user'));
    }

    public function create()
    {
        return view('admin.dashboard.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username'=>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.dashboard.create')
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $request->name,
            'username'=>$request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        session()->flash('success', 'User created successfully!');
        return redirect()->route('admin.dashboard.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.dashboard.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username'=>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.dashboard.edit', $user->id)
                ->withErrors($validator)
                ->withInput();
        }

        $user->update([
            'name' => $request->name,
            'username'=>$request->username,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        session()->flash('success', 'User updated successfully!');
        return redirect()->route('admin.dashboard.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('success', 'User deleted successfully!');
        return redirect()->route('admin.dashboard.index');
    }
}
