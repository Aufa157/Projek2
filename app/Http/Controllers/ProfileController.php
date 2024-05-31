<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('admin.pages.profile');
    }

    public function update()
    {
            
        $user = request()->user();
        $attributes = request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        auth()->user()->update($attributes);
        return back()->withStatus('Profile berhasil di ubah.');
    
}
}
