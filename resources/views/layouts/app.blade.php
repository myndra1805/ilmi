<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('/images/logo.png')}}" type="image/x-icon">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>

    <div class="min-h-screen bg-gray-50">

        <!-- Header -->
        <header class="inline">
            <nav class="flex justify-between lg:justify-between px-5 bg-white shadow-xl h-14 items-center sticky top-0 z-50">
                <div class="mr-5">
                    <a href="/">
                        <img src="{{asset('/images/logo.png')}}" alt="" width="50px" class="mx-auto">
                    </a>
                </div>
                <div class="h-6 w-6 cursor-pointer lg:hidden" id="icon-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div class="w-full absolute lg:static top-14 bg-white shadow-xl lg:shadow-none flex flex-col lg:flex-row left-0 w-full lg:w-auto lg:border-0 h-0 lg:h-auto overflow-hidden" id="menu">
                    <a class="py-2 px-2 lg:py-1 mt-3 lg:mt-0 mx-3 rounded-lg lg:mr-3 {{Request::path() === '/' ? 'bg-green-900 text-white' : 'hover:bg-green-900 hover:text-white'}}" href="/">Home</a>
                    <a class="py-2 px-2 lg:py-1 rounded-lg mx-3 {{Request::is('al-quran*') ? 'bg-green-900 text-white' : 'hover:bg-green-900 hover:text-white'}}" href="/al-quran">Al-Qur'an</a>
                    <a class="py-2 px-2 lg:py-1 rounded-lg mx-3 {{Request::is('iqra*') ? 'bg-green-900 text-white' : 'hover:bg-green-900 hover:text-white'}}" href="/iqra">Iqra</a>
                    <a class="py-2 px-2 lg:py-1 rounded-lg mx-3 {{Request::is('tausiah*') ? 'bg-green-900 text-white' : 'hover:bg-green-900 hover:text-white'}}" href="/tausiah">Tausiah</a>
                    <!-- <a class="py-2 px-2 lg:py-1 rounded-lg mx-3 {{Request::path() === 'Donate' ? 'bg-green-900 text-white' : 'hover:bg-green-900 hover:text-white'}}" href="/donate">Donate</a> -->
                    <a class="py-2 px-2 lg:py-1 rounded-lg mb-3 lg:mb-0 mx-3 lg:ml-3 {{Request::path() === 'articles' || Request::is('article*') ? 'bg-green-900 text-white' : 'hover:bg-green-900 hover:text-white'}}" href="/articles">Articles</a>
                    <!-- <a href="/login" class="py-2 px-2 lg:py-1 rounded-lg mr-1 {{Request::path() === 'login' ? 'bg-green-900 text-white' : 'hover:bg-green-900 hover:text-white'}}">Login</a>
                    <a href="/register" class="py-2 px-2 lg:py-1 rounded-lg ml-1 {{Request::path() === 'register' ? 'bg-green-900 text-white' : 'hover:bg-green-900 hover:text-white'}}">Sign Up</a> -->
                </div>
            </nav>
        </header>

        <!-- Page Content -->
        <main style="min-height: 80.8vh;">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#064e3b" fill-opacity="1" d="M0,224L26.7,197.3C53.3,171,107,117,160,133.3C213.3,149,267,235,320,240C373.3,245,427,171,480,149.3C533.3,128,587,160,640,165.3C693.3,171,747,149,800,154.7C853.3,160,907,192,960,208C1013.3,224,1067,224,1120,213.3C1173.3,203,1227,181,1280,181.3C1333.3,181,1387,203,1413,213.3L1440,224L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
            </svg>
            <footer class="bg-green-900 text-white flex justify-center flex-col pb-10 items-center">
                <div class="text-center mb-5">
                    <img src="{{asset('/images/logo.png')}}" alt="" width="100px" class="mx-auto">
                    <p class="font-bold text-xl">ILMI</p>
                    <div class="flex justify-center mt-1">
                        <span class="h-1 rounded-xl mx-1 bg-green-500 w-2"></span>
                        <span class="h-1 rounded-xl mx-1 bg-green-500 w-6"></span>
                        <span class="h-1 rounded-xl mx-1 bg-green-500 w-2"></span>
                    </div>
                </div>
                <p class="text-center flex justify-center">
                    &copy; 2021 Build with
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                    by IlmiTeams
                </p>
            </footer>
        </div>
    </div>

    @livewireScripts
    <script>
        window.addEventListener("DOMContentLoaded", event => {
            const iconMenu = document.querySelector("#icon-menu")
            const menu = document.querySelector("#menu")
            iconMenu.addEventListener("click", event => {
                iconMenu.children[0].classList.toggle('hidden')
                iconMenu.children[1].classList.toggle('hidden')
                menu.classList.toggle('h-0')
                menu.classList.toggle('h-auto')
                menu.classList.toggle('border-t')
                menu.classList.toggle('border-green-900')
            })
        })
    </script>
</body>

</html>