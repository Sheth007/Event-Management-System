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

            return view('welcome');
        } else {
            return redirect()->route('adminLogin')->withErrors(['email' => 'Invalid email or password']);
        }
    }

    function newUser()
    {
        $name = 'Admin User';  // You can change this as needed
        $email = 'admin@admin.com';  // You can change this as needed
        $password = 'admin';  // You can change this as needed

        // Hash the password using bcrypt
        $hashedPassword = Hash::make($password);

        // Insert the new user into the 'admins' table
        DB::table('admins')->insert([
            'name' => $name,  // Add the name to the users table
            'email' => $email,  // Add the email to the users table
            'password' => $hashedPassword,  // Add the hashed password to the users table
            'created_at' => now(),  // Set the created_at timestamp
            'updated_at' => now()   // Set the updated_at timestamp
        ]);

        // Optionally, return a success message or redirect to another page
        return "New admin user created successfully!";
    }
}
