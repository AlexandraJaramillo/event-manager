<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#ef3b2d',
            },
          },
        },
      }
  </script>
  <title>Tech-Events</title>
</head>

<body class="container mx-auto px-4">


  <nav
    class="flex fixed inset-x-0 bottom-0 z-10 w-screen bg-black border-b white:bg-slate-900 border-slate-900/10 lg:px-8 white:border-slate-300/10 lg:mx-0">
    <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
        <div class="relative flex justify-between h-16">
            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <div class="mx-auto">
                    <div class="flex space-x-20">
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="/"
                            class="px-3 py-2 text-lg font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('home') ? 'text-blue-500' : 'text-slate-200' }}">
                            <i class="fa-solid fa-house"></i>
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="/"
                            class="px-3 py-2 text-lg font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('posts.*') ? 'text-blue-500' : 'text-slate-200' }}">
                            <i class="fa-solid fa-ticket"></i>
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="/login"
                            class="px-3 py-2 text-lg font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('user') ? 'text-blue-500' : 'text-slate-200' }}">
                            <i class="fa-solid fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

  <main class="container mx-auto px-4 ">   

    
    {{$slot}}
  </main>

    
</body>

</html>