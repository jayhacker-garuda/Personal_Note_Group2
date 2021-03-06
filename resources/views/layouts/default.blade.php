<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="bg-gradient-to-b from-gray-600 via-black to-white h-full antialiased leading-none font-sans">
    <div class="">
    <div class="relative antialiased z-10 bg-black dark-mode:bg-gray-900 w-full">
        <div class="w-full text-gray-700 bg-dark dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: true }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between p-4">
                    <a href="{{ url('/') }}"
                        class="text-lg font-bold tracking-widest text-white  uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Personal
                        Notes</a>
                </div>
                <nav class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    @auth
                        @if (Auth::user()->user_type === 'admin')
                            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-400 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="{{ route('admin.index') }}">Admin-Panel</a>
                                @endif
                                <a class="px-2 py-2 mt-2 text-sm text-white font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-400 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ route('dashboard.index') }}">Home</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit"
                                class="px-2 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-400 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Logout</button>
                        </form>
                    @else
                        <a class="px-2 py-2 mt-2 text-sm text-white font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="{{ route('login') }}">Login</a>
                        <a class="px-2 py-2 mt-2 text-sm text-white font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="{{ route('register') }}">Sign Up</a>
                    @endauth
                </nav>
            </div>
        </div>
    </div>
    </div>


    <div>
        @yield('content')
    </div>
    <script src="{{ asset('js/jquery/jquery-3.6.0.js') }}"></script>
    @yield('js')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
