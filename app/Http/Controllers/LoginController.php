<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    public function showLogin()
    {
        return view('v_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email Wajib Di Isi',
                'password.required' => 'Password Wajib Di Isi',
            ]
        );
        if (Auth::attempt($credentials, $request)) {
            session()->flash('success','Anda Berhasil Login');
            return redirect()->intended('/');
        }else{
            session()->flash('errors','Email atau Password salah!');
        }
        return redirect()->route('login');  
        // if (Auth::attempt($credentials)) {
        //    $credentials =  $request->session()->regenerate();
        //    Log::info('User tipe_user: ' . Auth::user()->tipe_user);
        //     if (Auth::user()->tipe_user == 'admin'){
        //         return redirect('/admin')->with('success', 'Berhasil masuk!')->intended('admin/v_mainpage');

        //     } elseif(Auth::user()->tipe_user == 'Pengelola'){
        //         return redirect('/pengelola')->with('success', 'Berhasil masuk!')->intended('pengelola/mainpage');

        //     } elseif(Auth::user()->tipe_user == 'Pengunjung'){
        //         return redirect('/pengunjung')->with('success', 'Berhasil masuk!')->intended('pengunjung/mainpage');
        //     }
        // } else {
        //     return redirect()->back()->withErrors(['username dan password yang dimasukan salah'])->withInput();
        // }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // public function register(Request $request){
    //     $data = [
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'email' =>$request->email,
    //         'password' => Hash::make($request->password)
    //     ];

    //     User::create($data);

    //     $infologin = [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ];

    //     return redirect()->route('login');
    // }
}
