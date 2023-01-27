<x-layout>
  
    {{-- @include('partials._carousel') --}}
  
    <div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4 bg-red-1 00">

      {{-- @if(auth()->user()->role === '1')

      <a href="/eventsform">
        <p>Create Event</p>
      </a> 

      @endif --}}

      <br>
        <div class="header flex flex-row justify-between">
            <a href="{{ url('/') }}" class="flex items-center text-xl font-bold text-gray-900 dark:text-gray-800">
                <img class="w-8 h-8 mr-2 rotate-45" src="{{ asset('assets/Images/icon.png') }}" alt="logo">
                VivaTech
            </a>
            <a href="{{ url('/user') }}"><img class="rounded-full w-12 h-12 object-cover" src="{{ asset('assets/Images/joe.png') }}" alt="image"></a>
        </div>

        <section class="link--btn mt-8">
            <button type="button">Home</button>
            <a href="#topEvents"><button type="button">Top Events</button></a>
            <a href="#allEvents"><button type="button">All Events</button></a>
        </section>
        
  
      @unless(count($events) == 0)
  
      @foreach($events as $event)

      <x-event-card :event="$event" />      
    
      @endforeach
  
      @else
      <p>No events found</p>
      @endunless
      
    </div>

    {{-- Paginate, relation to ->paginate(3) on EventController --}}
    {{-- <div class="mt-6 p-4">
      {{$events->links()}}
    </div> --}}

  </x-layout>
  