@props(['event'])

<x-card>


  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-wrap -mx-3">

              <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                <div class="h-full bg-gradient-to-tl  rounded-xl">
                  <img src="{{$event->cover ? asset('storage/' . $event->cover) : asset('/images/ZAChEPmVBc7Y9TVxnV0oA2K1dKzg53ZdF52G0Uy4.png')}}" class="absolute top-0 hidden w-10 h-10 lg:block" alt="" />
                  
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


</x-card>