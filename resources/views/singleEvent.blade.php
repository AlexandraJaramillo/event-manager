<x-layouts.app
	title="Single Event"
	meta-description="Single Event meta description"
    >
    <br>
    <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left text-xl"></i></a>
    <br>
    <br>
    <div class="relative h-auto w-auto">
        <img src={{ asset('assets/Images/congress.jpeg') }} alt="image" class="rounded-md h-72 object-cover w-full">
        <button class="absolute bottom-4 right-6 text-sm text-white bg-gray-800 px-5 py-1 rounded-2xl"><i class="fa-solid fa-user"></i> 203</button>
    </div>
    <br>
    <div class="flex flex-col gap-3">
        <h1 class="font-bold text-xl">Mobile World Congress 2023</h1>
        <h2 class="font-semibold text-base text-gray-800">Sat, 11 Feb at 16:00h</h2>
        <p class="text-sm font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, nemo.</p>
    </div>
    <br>
    <hr class="w-full">
    <br>
    <div class="flex flex-row justify-between">
        <h2 class="font-bold">Free</h2>
        <button class="font-medium text-sm text-white bg-gray-800 px-5 py-1 rounded-2xl">BOOK NOW</button>
    </div>


</x-layouts.app>
