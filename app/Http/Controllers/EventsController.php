<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.events', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date'     => 'required',
            'time'    => 'required',
            'title' => 'required',
            'speaker' => 'required',
            'image' => 'required',
            'description' => 'required',
            'capacity' => 'required',
            'requirements' => 'required',
            'zoom' => 'required',
           
        ]);

        Event::create([
            'date' => $request->date,
            'time' => $request->time,
            'title' => $request->title,
            'speaker' => $request->speaker,
            'image' => $request->image,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'requirements' => $request->requirements,
            'zoom' => $request->zoom,
            'special' => $request->special,
        ]);

        return redirect(route('events'));
    }

    public function update(Event $event)
    {
        $data = request()->validate([
            'date' => '',
            'time' => '',
            'title' => '',
            'speaker' => '',
            'image' => '',
            'description' => '',
            'capacity' => '',
            'requirements' => '',
            'zoom' => '',
            'special' => '',
        ]);
        
        $event->update($data);
        return back();

    }

    public function delete(Event $event)
    {
       
        $event->delete();
        return redirect(route('events'));

    }
}
