<x-layouts.app
	title="User"
	meta-description="User meta description"
    >
    <br>
        <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left text-xl"></i></a>
    <br>
    <br>

    <div class="flex flex-row gap-4">
        <img class="rounded-full w-24 h-24 object-cover" src="{{ asset('assets/Images/joe.png') }}" alt="image">
        <div class="flex flex-col gap-2">
            <h2 class="text-base font-bold">Manolo Paco</h2>
            <p class="text-xs">⚙️ Tech Advisor en Factoria F5</p>
            <p class="text-xs">🚀 Amigo de Andrés y Rocío</p>
            <p class="text-xs text-gray-500 font-semibold">Barcelona</p>
        </div>
    </div>

    <br>
    <br>

    <section id="topEvents" class="top--events">
        <h2 class="text-lg font-medium">Your Events</h2>
        <br>
        <div class="top--events-carousel flex flex-row overflow-x-scroll gap-4 p-10 -mt-12">
            <div class="w-30 min-w-fit bg-white rounded-lg shadow dark:bg-gray-800">
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
    </section>

    <br>

    <section id="topEvents" class="top--events">
        <h2 class="text-lg font-medium">Liked Events</h2>
        <br>
        <div class="top--events-carousel flex flex-row overflow-x-scroll gap-4 p-10 -mt-12">
            <div class="w-30 min-w-fit bg-white rounded-lg shadow dark:bg-gray-800">
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
    </section>

    <br>

    <section id="topEvents" class="top--events mb-24">
        <h2 class="text-lg font-medium">Suggestions</h2>
        <br>
        <div class="top--events-carousel flex flex-row overflow-x-scroll gap-4 p-10 -mt-12">
            <div class="w-30 min-w-fit bg-white rounded-lg shadow dark:bg-gray-800">
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
    </section>
</x-layouts.app>
