<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreeventsRequest;
use App\Http\Requests\UpdateeventsRequest;
use App\Models\events;
use Illuminate\Support\Facades\DB;

class EventsController
{
    public function index()
    
    {
        $posts = DB::table('events')->get();

        return view('home', ['posts' => $posts]);
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
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateeventsRequest  $request
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateeventsRequest $request, events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(events $events)
    {
        //
    }
}
