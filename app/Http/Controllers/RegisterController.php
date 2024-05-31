<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistration(){
        return view('v_register');
    }

    public function register(Request $request){
        $validated = Validator::make($request->all(),[
            'name' => ['required'],
            'username' => ['required', 'uniques'],
            'email' => ['required'],
            'password' => ['required'],
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        session()->flash('registrasi','Anda Berhasil Registrasi, Sekarang anda memiliki akun');
        return redirect()->route('login');  
    }
}

