<x-layout>
  
    {{-- @include('partials._carousel') --}}
  
    <div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4 bg-red-1 00">

      <a href="/eventsform">
        <p>Create Event</p>
      </a>
        
  
      @unless(count($events) == 0)
  
      @foreach($events as $event)

      <x-event-card :event="$event" />      
    
      @endforeach
  
      @else
      <p>No events found</p>
      @endunless
      
    </div>

    {{-- Paginate, relation to ->paginate(3) on EventController --}}
    <div class="mt-6 p-4">
      {{$events->links()}}
    </div>

  </x-layout>
  