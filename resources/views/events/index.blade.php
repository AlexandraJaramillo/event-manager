<x-layout>
  
    {{-- @include('partials._carousel') --}}
  
    <div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4 bg-red-1 00">

      <a href="/eventsform">
        <p>Create Event</p>
      </a>
      <div>
         <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
         <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      </div>
        
  
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
  