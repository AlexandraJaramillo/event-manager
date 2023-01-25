<x-layouts.app
	title="Home"
	meta-description="Home meta description"
	>
    <main class="container mx-auto px-4 ">
        <br>
        <div class="header flex flex-row justify-between">
            <a href="#" class="flex items-center mb-6 text-2xl font-bold text-gray-900 dark:text-gray-800">
                <img class="w-8 h-8 mr-2 rotate-45" src="{{ asset('assets/Images/icon.png') }}" alt="logo">
                VivaTech
            </a>
            <div class="w-10 h-10 bg-gray-900 rounded-full"></div>
        </div>

        <br>

        <section class="link--btn">
            <button type="button">Home</button>
            <a href="#topEvents"><button type="button">Top Events</button></a>
            <a href="#allEvents"><button type="button">All Events</button></a>
        </section>

        <section class="card--main">
            <img src="{{ asset('assets/Images/congress.jpeg') }}" alt="new event image">
            <div class="card--main-info">
                <button class="text-white text-xs">NEW</button>
                <h2 class="text-xl font-bold">Mobile World Congress 2023</h2>
                <h3 class="text-base font-semibold text-gray-700">Sat, 11 Feb at 16:00h</h3>
                <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, mollitia?</p>
                <div class="card--main-btn place-items-start">
                    <button class="interested text-white bg-gray-800">+ Interested</button>
                    <button class="interested--amount text-white"><i class="fa-solid fa-user"></i> 203</button>
                </div>
            </div>
        </section>

        <br>

        <section id="topEvents" class="top--events">
            <h2 class="text-xl font-medium">Top Events</h2>
            <p class="text-ms text-gray-500">Best events available for you.</p>
            <br>
            <div class="top--events-carousel flex flex-row overflow-auto gap-2">
                <div class="w-30 min-w-full bg-white rounded-lg shadow dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg w-full" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
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
                        <img class="rounded-t-lg w-full" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
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
                        <img class="rounded-t-lg w-full" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
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

        <section id="allEvents" class="top--events mb-20">
            <h2 class="text-xl font-medium">All Events</h2>
            <p class="text-ms text-gray-500">All events available for you.</p>
            <br>

            <div class="top--events-carousel flex flex-row overflow-auto gap-2">
                <div class="w-30 min-w-full bg-white rounded-lg shadow dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg w-full" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
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
                        <img class="rounded-t-lg w-full" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
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
                        <img class="rounded-t-lg w-full" src="{{ asset('assets/Images/congress.jpeg') }}" alt="" />
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
    </main>
</x-layouts.app>
