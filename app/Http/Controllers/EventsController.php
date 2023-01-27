<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventsController
{
    //Show all events
    public function index() {

        return view('events.index', [
        
            // 'events' => Event::latest ()->paginate(3)      
            'events' => Event::all()  

        ]);
        
    }

    //Show single event
    public function show(Event $event) {
        return view('events.show', [
            'event' => $event
        ]);
    }

    // Show Create Form
    public function create() {
        return view('events.create');
    }
    //

    // Store Event Data
    public function store(Request $request) {
       
        // dd($request->file('cover'));
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'link' => 'required',
            'date' => 'required',
            'time' => 'required',   
            'max_participants' => 'required',          
            'description' => 'required',
            'available' => 'required',
            'location' => 'required'
            
        ]);


        if($request->hasFile('cover')) {
            $formFields['cover'] = $request->file('cover')->store('images', 'public');
        }

        Event::create($formFields);

        return redirect('/')->with('message', 'Event created successfully!');
    }
    
    
    // Show Edit Form
    public function edit(Event $event) {
        return view('events.edit', ['event' => $event]);
        
    }


    // Update Event Data   
    public function update(Request $request, Event $event) {
       
        // dd($request->file('cover'));
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'link' => 'required',
            'date' => 'required',
            'time' => 'required',   
            'max_participants' => 'required',          
            'description' => 'required',
            'available' => 'required',
            'location' => 'required',
            
        ]);


        if($request->hasFile('cover')) {
            $formFields['cover'] = $request->file('cover')->store('images', 'public');
        }

        $event->update($formFields);

        return redirect('/')->with('message', 'Event updated successfully!');
    }

    // Delete Event
    public function destroy(Event $event) {
        
         $event->delete();
         return redirect('/')->with('message', 'Event Deleted Successfully');
    }

    
}
