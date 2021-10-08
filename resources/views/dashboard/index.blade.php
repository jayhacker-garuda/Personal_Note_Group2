@extends('layouts.default')

@section('title')
    <title>{{ config('app.name') }}User-Dashboard</title>
@endsection

@section('content')
    <body>
    <div class="bg-gray-600 h-full">
        <header class="relative flex items-center justify-center h-screen mb-5 overflow-hidden">
            <div class="relative z-30 p-5 text-2xl text-white bg-black  rounded-xl">
                <div class="text-center">
                    <h1 class="text-white text-6xl font-bold">Welcome To Personal Notes</h1>
                    <div class="my-3"></div>
                    <h2 class="text-white text-5xl font-bold">Rojae Henry</h2>
                </div>
            </div>
        </header>

    </div>
    </body>
@endsection
