<x-layout>
  
    {{-- @include('partials._carousel') --}}
  
    <div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4 bg-red-1 00">

      {{-- @if(auth()->user()->role === '1')

      <a href="/eventsform">
        <p>Create Event</p>
      </a>

      @endif --}}
        
  
      @unless(count($events) == 0)
  
      @foreach($events as $event)

      {{-- <x-event-card :event="$event" />       --}}


    
      @endforeach
  
      @else
      <p>No events found</p>
      @endunless

      <br>
        <div class="header flex flex-row justify-between">
            <a href="{{ url('/') }}" class="flex items-center text-xl font-bold text-gray-900 dark:text-gray-800">
                <img class="w-8 h-8 mr-2 rotate-45" src="{{ asset('assets/Images/icon.png') }}" alt="logo">
                VivaTech
            </a>
            @auth
                
            <a href="events.show"><img class="rounded-full w-12 h-12 object-cover" src="{{ asset('assets/Images/joe.png') }}" alt="image"></a>
            @endauth
        </div>

        <section class="link--btn mt-8">
            <button type="button">Home</button>
            <a href="#topEvents"><button type="button">Top Events</button></a>
            <a href="#allEvents"><button type="button">All Events</button></a>
        </section>
        
        
        <a href="/singleEvent">
          <section class="card--main">
            
            
            @foreach ($events as $event)

            <img src="{{ asset('assets/Images/congress.jpeg') }}" alt="new event image">
            <div class="card--main-info">
              <button class="text-white text-xs">NEW</button>
              <h2 class="text-xl font-bold">{{$event->title}}</h2>
              <h3 class="text-base font-semibold text-gray-700">{{$event->data}}</h3>
              <p class="text-sm">{{$event->description}}</p>
              <div class="card--main-btn place-items-start">
                <button class="interested text-white bg-gray-800">+ Interested</button>
                <button class="interested--amount text-black"><i class="fa-solid fa-user"></i> {{$event->max_participants}}</button>
              </div>
              <br>
            </div>

            @endforeach
            

          </section>
        </a>

        
        
        

        <br>

        <section id="topEvents" class="top--events">
            <h2 class="text-xl font-medium">Top Events</h2>
            <p class="text-ms text-gray-500">Best events available for you.</p>
            <br>
            <div class="top--events-carousel flex flex-row overflow-x-scroll gap-4 p-6 -mt-6">
                @foreach ($events as $event)
                    
                <div class="w-30 min-w-fit bg-white rounded-lg shadow dark:bg-gray-800">
                    <a href="/events/{{$event->id}}">
                        <img class="rounded-t-lg w-full object-cover" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-m font-bold tracking-tight text-gray-900 dark:text-white">{{$event->title}}</h5>
                            <h5 class="mb-2 text-xs font-medium tracking-tight text-gray-900 dark:text-white">Friday, 13 Feb at 13:00h</h5>
                        </a>
                    </div>
                </div>
                
                @endforeach
            </div>
        </section>

        <br>

        <section id="allEvents" class="top--events mb-20">
            <h2 class="text-xl font-medium">All Events</h2>
            <p class="text-ms text-gray-500">All events available for you.</p>
            <br>

            <div class="top--events-carousel flex flex-row overflow-x-scroll gap-4 p-6 -mt-6">
                <div class="w-30 min-w-full bg-white rounded-lg shadow dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg w-full object-cover" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-m font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2023</h5>
                            <h5 class="mb-2 text-xs font-medium tracking-tight text-gray-900 dark:text-white">Friday, 13 Feb at 13:00h</h5>
                        </a>
                    </div>
                </div>
                <div class="w-30 min-w-full bg-white rounded-lg shadow dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg w-full object-cover" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-m font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2023</h5>
                            <h5 class="mb-2 text-xs font-medium tracking-tight text-gray-900 dark:text-white">Friday, 13 Feb at 13:00h</h5>
                        </a>
                    </div>
                </div>
                <div class="w-30 min-w-full bg-white rounded-lg shadow dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg w-full object-cover" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-m font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2023</h5>
                            <h5 class="mb-2 text-xs font-medium tracking-tight text-gray-900 dark:text-white">Friday, 13 Feb at 13:00h</h5>
                        </a>
                    </div>
                </div>
            </div>
            <br>
            <a href="/allEvents"><h3 class="mt-2 text-gray-600 text-base">See all events <i class="fa-solid fa-arrow-right text-sm"></i></h3></a>
        </section>
        <br>
      
    </div>

    {{-- Paginate, relation to ->paginate(3) on EventController --}}
    <div class="mt-6 p-4">
      {{$events->links()}}
    </div>

  </x-layout>
  