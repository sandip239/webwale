<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class authcontroller extends Controller
{
    public function adminAuth(Request $request)
{
    if ($request->isMethod('post')) {
        $email = $request->input('email');
        $password = $request->input('password');
        
        $user = DB::table('users')->where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect()->route('admin-index');
            }
        } else {
            return redirect()->route('admin-auth')->withErrors(['msg' => 'User Not Found']);
        }
    }

    return view('admin.auth-login');
}
}
