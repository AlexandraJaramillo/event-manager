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
        
            'events' => Event::all()

        ]);
        
    }

    //Show single event
    public function show(Event $event) {
        // return view('events.show', [
        //     'event' => $event
        // ]);
    }

    // Show Create Form
    public function create() {
        // return view('events.create');
    }

    // Store Event Data
    public function store(Request $request) {
        
    }

    // Show Edit Form
    public function edit(Event $event) {
        
    }

    // Update Event Data
    public function update(Request $request, Event $event) {
        // Make sure logged in user is admin
        
    }

    // Delete Event
    public function destroy(Event $event) {
        // Make sure logged in user is admin
        
    }

    
}
