<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\events;
use Carbon\Carbon;

class eventController extends Controller
{
    function newEvent(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $category_id = $request->category_id;
        $date = $request->date;
        $time = $request->time;
        $image = $request->file('image')->store('uploads', 'public');
        $location = $request->location;

        DB::table('events')->insert([
            'title' => $title,
            'description' => $description,
            'category_id' => $category_id,
            'date' => $date,
            'time' => $time,
            'location' => $location,
            'image' => $image,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // return "New event created successfully!";
        return view('events');
    }

    function eventEdit($id)
    {
        $event = DB::table('events')->where('id', $id)->first(); // Get the event

        // Log::info($id);
        return view('updateEvent', [
            'event' => $event,
            'id' => $id
        ]);
    }

    function updateEvent(Request $request)
    {
        $image = NULL;
        $id = $request->id;
        $title = $request->title;
        $description = $request->description;
        $category_id = $request->category_id;
        $date = $request->date;
        $time = $request->time;
        $location = $request->location;
        $pre_image = $request->pre_image;

        // Log::info($pre_image);

        $image = $request->hasFile('image')
            ? $request->file('image')->store('uploads', 'public')
            : $pre_image;

        DB::table('events')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'description' => $description,
                'category_id' => $category_id,
                'date' => $date,
                'time' => $time,
                'location' => $location,
                'image' => $image,
                'updated_at' => now()
            ]);

        Log::info(DB::getQueryLog());

        session()->forget('_token');

        return view('events');
    }

    function displayTotalEvents()
    {
        return view('allEvents', [
            'events' => DB::table('events')->paginate(15)
        ]);
    }

    function delete($id)
    {
        $deletedRows = DB::table('events')->where('id', $id)->delete();
        if (!$deletedRows) {
            die;
        } else {
            return redirect()->back();
        }
    }

    function searchEvents(Request $request)
    {
        if ($request->filled('search')) {
            $events = events::search($request->search)->get();
        } else {
            return view('allEvents', [
                'events' => DB::table('events')->paginate(15)
            ]);
        }

        return view('searchedEvents', compact('events'));
    }

    function recentEvents()
    {
        // the source of below is https://www.interserver.net/tips/kb/tracking-and-summarizing-data-with-custom-queries-in-laravel/

        // this below is for a whole week from curent date
        // $recent = DB::table('registrations')->where('created_at', '>=', Carbon::now()->subWeek())->get();

        // this is for past 24 hours ago
        // without paginate
        // $recent = DB::table('registrations')->where('created_at', '>=', Carbon::now()->subDay())->get();

        //with paginate
        $recent = DB::table('events')->where('created_at', '>=', Carbon::now()->subDay())->paginate(10);

        // pass the data with the cmpact function
        // return view('recent_events_regi_summury', compact('recent'));

        // SHARE DATA TO GLOBAL SO ANY VIEW CAN ACCESS IT
        // View::share('recent', $recent);

        // share data to specific via with function
        return view('recentEvents_only')->with('recent', $recent);
    }
}
