<nav
    class="flex fixed inset-x-0 bottom-0 z-10 w-screen bg-black border-b white:bg-slate-900 border-slate-900/10 lg:px-8 white:border-slate-300/10 lg:mx-0">
    <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
        <div class="relative flex justify-between h-16">
            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <div class="mx-auto">
                    <div class="flex space-x-20">
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="/"
                            class="px-3 py-2 text-lg font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('/') ? 'text-blue-500' : 'text-slate-200' }}">
                            <i class="fa-solid fa-house"></i>
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="/"
                            class="px-3 py-2 text-lg font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('/') ? 'text-blue-500' : 'text-slate-200' }}">
                            <i class="fa-solid fa-ticket"></i>
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="/login"
                            class="px-3 py-2 text-lg font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('login') ? 'text-blue-500' : 'text-slate-200' }}">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
