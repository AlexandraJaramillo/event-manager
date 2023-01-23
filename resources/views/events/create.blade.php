<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">EVENT</h2>
        <p class="mb-4">Post an Event</p>
      </header>
  
      <form method="POST" action="/events" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2">Title</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
            value="{{old('title')}}" />
  
          @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="tags" class="inline-block text-lg mb-2">Tags</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
            placeholder="Example: React Js" value="{{old('tags')}}" />
  
          @error('tags')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="link" class="inline-block text-lg mb-2">Link</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="link"
            placeholder="Example: Zoom Link" value="{{old('link')}}" />
  
          @error('link')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="location" class="inline-block text-lg mb-2">Location</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
            placeholder="Example: London" value="{{old('location')}}" />
  
          @error('location')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="date" class="inline-block text-lg mb-2">
            Date
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="date" value="{{old('date')}}" />
  
          @error('date')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="max_participants" class="inline-block text-lg mb-2">
            Num Participants
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="max_participants" value="{{old('max_participants')}}" />
  
          @error('max_participants')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="time" class="inline-block text-lg mb-2">
            Time
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="time"
            value="{{old('time')}}" />
  
          @error('time')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="available" class="inline-block text-lg mb-2">
            Available
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="available"
            placeholder="Example: yes/no" value="{{old('available')}}" />
  
          @error('available')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="cover" class="inline-block text-lg mb-2">
            Cover
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="cover" />
  
          @error('cover')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Job Description
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
            placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Create event
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </x-card>

</x-layout>
  
  