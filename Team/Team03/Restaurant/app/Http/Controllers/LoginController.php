<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $attempt = Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);
        if($attempt) {
            return redirect('/admin/foodlist');
        }
        return back();
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
