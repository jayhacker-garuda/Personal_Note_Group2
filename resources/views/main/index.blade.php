<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}Home</title>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
@extends('layouts.default')
@section('content')
<<<<<<< HEAD
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
=======

<body class="bg-gray-100 h-screen">
{{--<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">--}}
{{--<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">--}}
>>>>>>> 5d893577924e8b1bc8355a90da048f331eb6f8d4


<section class="relative  bg-blueGray-50">
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            Your story starts with us.
                        </h1>
                        <p class="mt-4 text-lg text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="my-10"></div>
                        <a href="" class="w-5/12  px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">sign up</a>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">--}}
{{--            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">--}}
{{--                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>--}}
{{--            </svg>--}}
{{--        </div>--}}
    </div>
    <section class="pb-10 bg-blueGray-200 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Lorem ipsum dolor sit amet</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusamus delectus dolorum molestiae quia quibusdam quisquam tempore temporibus vel veniam!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Lorem ipsum dolor sit amet</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                                Keep you user engaged by providing meaningful information.
                                Remember that by this time, the user is curious.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                <i class="fas fa-fingerprint"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Lorem ipsum dolor sit amet</h6>
                            <p class="mt-2 mb-4 text-blueGray-500 jus">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</section>
<!-- card start -->
<section class="w-full text-gray-900 py-36 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 flex items-center justify-center">
        <div class="lg:w-3/6 lg:pr-0 pr-0">
            <h1 class="font-medium text-5xl text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            <p class="leading-relaxed mt-4 text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="lg:w-3/6 xl:w-2/5 md:w-full bg-gray-50 p-8 flex flex-col lg:ml-auto w-full mt-10 lg:mt-0 rounded-md">
            <img src="https://evernote.com/c/assets/homepage-repackaging/clip_the_web__en.png?117a41cc66580358" alt="">
        </div>
    </div>
    <div class="my-20"></div>
    <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:px-4 flex items-center justify-center">
        <div class="lg:w-3/6 lg:pr-0 bg-gray-50 pr-0 p-8 rounded-md">
            <img src="https://evernote.com/c/assets/homepage-repackaging/clip_the_web__en.png?117a41cc66580358" alt="">
        </div>
        <div class="lg:w-3/6 xl:w-2/5 md:w-full flex flex-col lg:ml-auto w-full mt-10 lg:mt-0 ">
            <h1 class="font-medium text-5xl text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            <p class="leading-relaxed mt-4 text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="my-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 flex items-center justify-center">
        <div class="lg:w-3/6 lg:pr-0 pr-0">
            <h1 class="font-medium text-5xl text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            <p class="leading-relaxed mt-4 text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="lg:w-3/6 xl:w-2/5 md:w-full bg-gray-50 p-8 flex flex-col lg:ml-auto w-full mt-10 lg:mt-0 rounded-md">
            <img src="https://evernote.com/c/assets/homepage-repackaging/clip_the_web__en.png?117a41cc66580358" alt="">
        </div>
    </div>
</section>




<!-- card end -->



<div class="flex flex-wrap items-center justify-center" style="margin-top: -10%">
    <div class="rounded-2xl bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 w-auto text-center text-white p-8 ">
        <h1 class="text-2xl ">View others post</h1>
        <div class="my-5"></div>
        <a href="" class="items-center w-3/12 mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">View</a>
    </div>
    <div class="mx-10"></div>
    <div class="rounded-2xl bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 w-auto text-center text-white p-8 ">
        <h1 class="text-2xl ">Create a post</h1>
        <div class="my-5"></div>
        <a href="" class="items-center w-3/12 mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">View</a>
    </div>
</div>


<script src="{{ mix('js/app.js') }}"></script>
</body>
@endsection
</html>
