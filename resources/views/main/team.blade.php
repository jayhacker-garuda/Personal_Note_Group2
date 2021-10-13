@extends('layouts.default')

@section('title')
    <title>{{ config('app.name') }}Team</title>
@endsection

@section('content')
    <div style="">
    <section class="max-w-6xl  mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
{{--            <h2 class="text-base font-bold text-indigo-600">--}}
{{--                We have the best equipment--}}
{{--            </h2>--}}
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-white">
                Check our awesome team members
            </h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('/storage/media/202206166_645561456360528_6335631248041693254_n.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Shamar Stewart</p>
                    <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('storage/media/Screenshot 2021-10-12 105100.png') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Ricardo Hibbert</p>
                    <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('storage/media/WhatsApp Image 2021-09-21 at 1.52.33 PM.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Ezra Muir</p>
                    <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('storage/media/IMG-20210526-WA0012.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Rojae Henry</p>
                    <p class="text-base text-gray-400 font-normal">Css Designer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('storage/media/1580290178565.jfif') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Showayne Adnderson</p>
                    <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
                </div>
            </div>

        </div>
    </section>
    </div>
@endsection
