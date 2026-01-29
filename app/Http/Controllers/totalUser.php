<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class totalUser extends Controller
{
    function display(Request $request)
    {
        return view('totalUsers', [
            'users' => DB::table('users')->paginate(15)
        ]);
    }
}
