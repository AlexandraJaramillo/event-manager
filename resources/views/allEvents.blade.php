<x-layouts.app
	title="All Events"
	meta-description="All Events meta description"
	>
    <br>
        <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left text-xl"></i></a>
    <br>
    <h1 class="font-semibold text-2xl mt-4">All Events</h1>
    <br>
    <div class="flex flex-row gap-2">
        <div>
            <img class="rounded-md w-72 h-full object-cover" src="{{ asset('assets/Images/congress.jpeg') }}" alt="image">
        </div>
        <div class="flex flex-col gap-2 w-96">
            <h2 class="text-sm font-bold">Mobile World Congress 2023</h2>
            <h3 class="text-xs font-semibold text-gray-800">Sat, 11 Feb at 16:00h</h3>
            <p class="text-xs">Lorem ipsum dolor sit amet consectetur...</p>
            <div class="flex flex-row justify-between">
                <h2 class="text-base font-semibold">15€</h2>
                <button class="bg-gray-800 text-xs text-white px-5 py-1 rounded-2xl">BOOK NOW</button>
            </div>
        </div>
    </div>
    <br>
    <hr class="w-full">

</x-layouts.app>
