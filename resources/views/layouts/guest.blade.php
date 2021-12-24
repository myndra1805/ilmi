<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/images/logo.png')}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    @if(Auth::check())
    <div class="flex">
        <header class="inline">
            <aside class="bg-gray-900 h-screen sticky top-0 w-0 overflow-hidden lg:w-64 flex flex-col divide-y divide-green-700" id="sidenav">
                <div class="flex items-center justify-center">
                    <div class="my-5">
                        <img src="{{asset('/images/logo.png')}}" alt="" class="rounded-full h-32 w-32">
                    </div>
                </div>
                <div class="text-white flex flex-col pt-3">
                    <a href="/admin/dashboard" class="py-5 flex items-center px-3 hover:bg-green-700 {{Request::is('*dashboard') ? 'bg-green-700' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        Dashboard
                    </a>
                    <a href="/admin/tausiah" class="py-5 flex items-center px-3 hover:bg-green-700 {{Request::is('*tausiah') ? 'bg-green-700' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        Tausiah
                    </a>
                    <a href="/admin/articles" class="py-5 flex items-center px-3 hover:bg-green-700 {{Request::is('*articles') ? 'bg-green-700' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        Articles
                    </a>
                </div>
            </aside>
        </header>
        <div class="w-full inline-block">
            <nav class="sticky top-0 flex py-5 w-full bg-green-700 justify-between px-3 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 cursor-pointer text-white" id="menu" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 hover:text-gray-900 focus:outline-none focus:shadow-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 inline-block text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-green-800">
                            <a class="flex items-center px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-green-600 dark-mode:focus:bg-green-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-green-200 md:mt-0 hover:text-white focus:text-green-900 hover:bg-green-700 focus:bg-green-200 focus:outline-none focus:shadow-outline" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Settings
                            </a>
                            <a class="flex items-center px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-green-600 dark-mode:focus:bg-green-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-green-200 md:mt-0 hover:text-white focus:text-green-900 hover:bg-green-700 focus:bg-green-200 focus:outline-none focus:shadow-outline" href="/logout" id="logout">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <main class="w-full">
                {{$slot}}
            </main>
        </div>
        <form action="/logout" id="form-logout" class="hidden" method="post">
            @csrf
        </form>
    </div>
    @else
    {{$slot}}
    @endif
    <script>
        const iconMenu = document.querySelector("#menu")
        iconMenu.addEventListener("click", event => {
            document.querySelector("#sidenav").classList.toggle('w-64')
            document.querySelector("#sidenav").classList.toggle('lg:w-64')
            document.querySelector("#sidenav").classList.toggle('w-0')
            document.querySelector("#sidenav").classList.toggle('lg:w-0')
        })
        document.querySelector("#logout").addEventListener("click", event => {
            event.preventDefault()
            document.querySelector("#form-logout").submit()
        })
    </script>
    <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
</body>

</html>