<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        if (auth()->check()) {
            return redirect()->to('homeadmin');
        }
        return view('login');
    }

    public function postloginAdmin(Request $request)
    {

        $remember = $request->has('rememberme') ? true : false;
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $remember)) {
            return redirect()->to('homeadmin');
        }
        return redirect()->to('register');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
