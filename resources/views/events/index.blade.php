<x-layout>
  
    {{-- @include('partials._carousel') --}}
  
    <div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4 bg-red-300">

      <a href="/eventsform">
        <p>Create Event</p>
      </a>
        
  
      @unless(count($events) == 1)
  
      @foreach($events as $event)
      {{-- <x-event-card :event="$event" /> --}}
      {{-- <div class="flex text-black">
        <img class=" w-20  h-20 mr-6 " src="{{asset('images/HACK.PNG')}}" alt="">

        <div>

            <h3 class="text-2xl">
                <a href="/events/{{$event->id}}">{{ $event->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $event->description }}
                <x-event-tags :tagsCsv="$event->tags"/>
            </div>
            <ul class="flex">
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">{{ $event->date }}</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">{{ $event->time }}</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">{{ $event->location }}</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">{{ $event->max_participants }}</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">{{ $event->available }}</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{$event->location}}
            </div>

        </div>

    </div> --}}

    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-wrap -mx-3">

              <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                  <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/shapes/waves-white.svg" class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                  <div class="relative flex items-center justify-center h-full">
                    <img class="relative z-20 w-full pt-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/illustrations/rocket-white.png" alt="rocket" />

                  </div>
                </div>
              </div>

            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
              <div class="flex flex-col h-full">
                <a href="/events/{{$event->id}}">
                  <p class="pt-2 mb-1 font-semibold">{{ $event->title }}</p>
                </a>
                <h5 class="font-bold">{{ $event->date }}</h5>
                <p class="mb-12">{{ $event->time }}</p>
                <p class="mb-12">{{ $event->location }}</p>
                <a class="mt-auto mb-0 font-semibold leading-normal text-sm group text-slate-500" href="javascript:;">
                  + interested
                  <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                </a>
              </div>
            </div>


          </div>
        </div>
      </div>



      @endforeach
  
      @else
      <p>No events found</p>
      @endunless
      
    </div>

  </x-layout>
  