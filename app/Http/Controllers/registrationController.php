<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Exports\RegistrationExport;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class registrationController extends Controller
{
    function diaplyRegistration()
    {
        return view('eventRegistration', [
            'registration' => DB::table('registrations')->paginate(10)
        ]);
    }

    function excelExport()
    {
        return Excel::download(new RegistrationExport, 'Registration.xlsx');
    }

    function recentEventsRegi()
    {
        // the source of below is https://www.interserver.net/tips/kb/tracking-and-summarizing-data-with-custom-queries-in-laravel/

        // this below is for a whole week from curent date
        $recent = DB::table('registrations')->where('created_at', '>=', Carbon::now()->subWeek())->paginate(10);

        // this is for past 24 hours ago
        // without paginate
        // $recent = DB::table('registrations')->where('created_at', '>=', Carbon::now()->subDay())->get();

        //with paginate
        // $recent = DB::table('registrations')->where('created_at', '>=', Carbon::now()->subDay())->paginate(10);

        // pass the data with the cmpact function
        // return view('recent_events_regi_summury', compact('recent'));

        // SHARE DATA TO GLOBAL SO ANY VIEW CAN ACCESS IT
        // View::share('recent', $recent);

        // share data to specific via with function
        return view('recent_events_regi_summury')->with('recent', $recent);
    }

    function filterEvents(Request $request)
    {
        $validated = $request->validate([
            'event' => 'required|in:1,2,3',
        ]);

        $event = $validated['event'];

        return view('eventRegistration', [
            'registration' => DB::table('registrations')
                ->where('event_id', $event)
                ->paginate(10)
        ]);
    }
}
