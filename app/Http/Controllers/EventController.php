<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreeventsRequest;
use App\Http\Requests\UpdateeventsRequest;
use App\Models\Event;

class EventController
{
    public function index()
    
    {
        $events = Event::get();

        return view('home', ['events' => $events]);
    }

    public function show($event){
        return $event;
    }
   
    
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreeventsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreeventsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $events
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateeventsRequest  $request
     * @param  \App\Models\Event  $events
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateeventsRequest $request, Event $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $events)
    {
        //
    }
}
