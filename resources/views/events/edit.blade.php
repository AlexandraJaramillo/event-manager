<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Edit Event</h2>
        <p class="mb-4"> {{$event->title}}</p>
      </header>
  
      <form method="POST" action="/events/{{$event->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2">Title</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
            value="{{$event->title}}" />
  
          @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="tags" class="inline-block text-lg mb-2">Tags</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
            placeholder="Example: Senior Laravel Developer" value="{{$event->tags}}" />
  
          @error('tags')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="link" class="inline-block text-lg mb-2">Link</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="link"
            placeholder="Example: Senior Laravel Developer" value="{{$event->link}}" />
  
          @error('tags')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="location" class="inline-block text-lg mb-2">Location</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
            placeholder="Example: Remote, Boston MA, etc" value="{{$event->location}}" />
  
          @error('location')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="date" class="inline-block text-lg mb-2">
            Date
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="date" value="{{$event->date}}" />
  
          @error('date')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="max_participants" class="inline-block text-lg mb-2">
            Num Participants
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="max_participants" value="{{$event->max_participants}}" />
  
          @error('max_participants')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="time" class="inline-block text-lg mb-2">
            Time
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="time"
            value="{{$event->time}}" />
  
          @error('time')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="available" class="inline-block text-lg mb-2">
            Available
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="available"
            placeholder="Example: yes/no" value="{{$event->available}}" />
  
          @error('available')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>        
        
  
        <div class="mb-6">
          <label for="cover" class="inline-block text-lg mb-2">
            Cover
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="cover" />
  
          <img class="w-48 mr-6 mb-6"
            src="{{$event->cover ? asset('storage/' . $event->cover) : asset('/images/no-image.png')}}" alt="" />
  
          @error('cover')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Job Description
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
            placeholder="Include tasks, requirements, salary, etc">{{$event->description}}</textarea>
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Update Event
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </x-card>
  </x-layout>
  