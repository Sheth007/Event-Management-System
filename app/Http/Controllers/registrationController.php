<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\registration;
use App\Exports\RegistrationExport;
use Maatwebsite\Excel\Facades\Excel;

class registrationController extends Controller
{
    function diaplyRegistration()
    {
        return view('eventRegistration', [
            'registration' => DB::table('registrations')->paginate(15)
        ]);
    }

    function excelExport()
    {
        return Excel::download(new RegistrationExport, 'Registration.xlsx');
    }
}
