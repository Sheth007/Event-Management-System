<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class adminLoginController extends Controller
{
    function Validate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('admins')->where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            Auth::loginUsingId($user->id);

            // new session
            $request->session()->put('admin_email', $email);

            // to set the cookies
            // return response()->view('profile')->withCookie(cookie('name', 'user_name', 60));

            return view('dashboard');
            die;
        } else {
            return redirect()->route('adminLogin')->withErrors(['email' => 'Invalid email or password']);
        }
    }

    function newUser()
    {
        $name = 'Admin User';
        $email = 'admin@admin.com';
        $password = 'admin';

        $hashedPassword = Hash::make($password);

        DB::table('admins')->insert([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return "New admin created successfully!";
    }

    function logout()
    {
        // session pull
        // session()->pull('admin_email');

        session()->forget('admin_email');

        session()->flush();

        // delete the cookies
        // return response()->view('login')->cookie('user_name', null, -1);

        return view('adminLogin');
    }

    function resetPassword(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $enc_password = bcrypt($password);

        $affected = DB::table('admins')
            ->where('email', $email)
            ->update(['password' => $enc_password, 'updated_at' => now()]);

        if ($affected) {
            return redirect()->route('adminLogin');
        } else {
            return view('adminPasswordReset');
        }
    }
}
