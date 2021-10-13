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

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
@auth
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            @include('layouts.sidebar')
            
            <div class="flex-1 flex flex-col overflow-hidden">
                @include('layouts.header')

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                        @yield('admin-panel')
                    </div>
                </main>
            </div>
        </div>
@else
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                        @yield('admin-panel')
                    </div>
                </main>
@endauth



    
    @yield('js')
    <script src="{{ asset('js/jquery/jquery-3.6.0.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
