<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $admin = $request->only('email', 'name');
        $admin['password'] = \Hash::make($request->password);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('');
            $admin['avatar'] = $path;
        }
        // dd($admin);
        User::create($admin);
        return redirect()->route('login')->with('success', 'Đăng ký thành công');
    }
    public function login(Request $request)
    {
        return view('auth.login');
    }
    public function pLogin(Request $request)
    {
        $login = $request->only('email', 'password');
        // Auth::attempt($login);

        // dd(Auth::guard('admin')->attempt($login));
        if (!Auth::guard('web')->attempt($login)) {
            if (!Auth::guard('admin')->attempt($login)) {
                return redirect()->back()->with('error', 'Sai tài khoản hoặc mật khẩu');
            }
            return redirect()->route('admin.admin.index');
        } elseif (Auth::guard('web')->attempt($login)) {
            if (!Auth::guard('web')->attempt($login)) {
                return redirect()->back()->with('error', 'Sai tài khoản hoặc mật khẩu');
            }

            $nextPage = session()->get('nextpage');

            if ($nextPage) {
                session()->forget('nextpage');
                return redirect()->route($nextPage);
            }

            return redirect()->route('home');


        }

    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }
    public function userlogout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }

}
