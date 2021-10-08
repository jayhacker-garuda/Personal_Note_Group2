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
        <div class="flex flex-wrap items-center justify-center" style="margin-top: -16%">
            <div class="py-5 rounded-2xl bg-gradient-to-r from-gray-600 via-black to-gray-600 w-auto text-center text-white p-8 ">
               <h1>View others post</h1>
                <div class="my-5"></div>
                <a href="" class="bg-white rounded text-black p-3 w-3/12 mt-4 px-3 py-2" >view</a>
            </div>
            <div class="mx-10"></div>
            <div class="py-5 rounded-2xl bg-gradient-to-r from-gray-600 via-black to-gray-600 w-auto text-center text-white p-8 ">
                <h1>View others post</h1>
                <div class="my-5"></div>
                <a href="" class="bg-white rounded text-black p-3 w-3/12 mt-4 px-3 py-2" >view</a>
            </div>
        </div>
    </div>
    </body>
@endsection
