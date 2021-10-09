@extends('layouts.default')

@section('title')
    <title>{{ config('app.name') }}User-Dashboard</title>
@endsection

@section('content')
    <body>
    <div class="bg-gray-400 h-full">
        <div class="py-2">
            <div class="p-2 space-x-1.5">
                <a id="homeBtn" class="p-2 py-2 bg-white rounded cursor-pointer">
                    Home
                </a>
                <a id="profileBtn" class="p-2 py-2 bg-white rounded cursor-pointer">
                    Profile
                </a>
                <a id="settingsBtn" class="p-2 py-2 bg-white rounded cursor-pointer">
                    Settings
                </a>
            </div>
        </div>
            <div class="flex items-center justify-center h-screen mb-5 overflow-hidden" style="margin-top: -9%">
                <div class="relative z-30 p-5 text-2xl text-white bg-black  rounded-xl">
                    <div class="text-center">
                        <h1 class="text-white text-6xl font-bold">Welcome To Personal Notes</h1>
                        <div class="my-3"></div>
                        <h2 class="text-white text-5xl font-bold">{{ Auth::user()->name }}</h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center justify-center" style="margin-top: -16%">
                <div class="py-5 rounded-2xl bg-gradient-to-r from-gray-600 via-black to-gray-600 w-auto text-center text-white p-8 ">
                   <h1>View others post</h1>
                    <div class="my-5"></div>
                    <a href="" class="bg-white rounded text-black p-3 w-3/12 mt-4 px-3 py-2" >view</a>
                </div>
                <div class="mx-10"></div>
                <div class="py-5 rounded-2xl bg-gradient-to-r from-gray-600 via-black to-gray-600 w-auto text-center text-white p-8 ">
                    <h1>Create a Post</h1>
                    <div class="my-5"></div>
                    <a href="" class="bg-white rounded text-black p-3 w-3/12 mt-4 px-3 py-2" >Create</a>
                </div>
            </div>



        <div class="my-5 bg-gray-500"></div>
        <div id="home" class="bg-gray-400" style="display: block">
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto max-w-7x1">
                    <div class="flex flex-wrap w-full mb-4 p-4">
                        <div class="w-full mb-6 lg:mb-0">
                            <h1 class="sm:text-4xl text-5xl font-bold title-font mb-2 text-gray-900">To Do List</h1>
                            <div class="h-1 w-20 bg-indigo-500 rounded"></div>

                        </div>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
    {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="https://cdn.seeklearning.com.au/media/images/career-guide/module/information-technology-technician-module.jpg" alt="Image Size 720x400">--}}
    {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
    {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://entrepreneurhandbook.co.uk/wp-content/uploads/2014/11/Smiling-customer-service-representative.jpg.webp" alt="Image Size 720x400">--}}
    {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
    {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://www.careermatch.com/job-prep/wp-content/uploads/sites/2/2018/09/administrative-assistant.jpg" alt="Image Size 720x400">--}}
    {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian </h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
    {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://futurecio.tech/wp-content/uploads/2020/09/pexels-photo-3840870.jpeg " alt="Image Size 720x400">--}}
    {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
    {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://academics.lmu.edu/media/lmuacademics/extension/images/full-stack-developer.jpg " alt="Image Size 720x400">--}}
    {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
    {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://www.manateetech.edu/wp-content/uploads/2017/05/IMG_7393-e1495565046548.jpg " alt="Image Size 720x400">--}}
    {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container px-5 py-8 mx-auto max-w-7x1">
                    <div class="flex flex-wrap w-full mb-4 p-4">
                        <div class="w-full mb-6 lg:mb-0">
                            <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900">Reminder List</h1>
                            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="https://cdn.seeklearning.com.au/media/images/career-guide/module/information-technology-technician-module.jpg" alt="Image Size 720x400">--}}
                                {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://entrepreneurhandbook.co.uk/wp-content/uploads/2014/11/Smiling-customer-service-representative.jpg.webp" alt="Image Size 720x400">--}}
                                {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://www.careermatch.com/job-prep/wp-content/uploads/sites/2/2018/09/administrative-assistant.jpg" alt="Image Size 720x400">--}}
                                {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian </h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container px-5 py-8 mx-auto max-w-7x1">
                    <div class="flex flex-wrap w-full mb-4 p-4">
                        <div class="w-full mb-6 lg:mb-0">
                            <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900">Personal List</h1>
                            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://entrepreneurhandbook.co.uk/wp-content/uploads/2014/11/Smiling-customer-service-representative.jpg.webp" alt="Image Size 720x400">--}}
                                {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://www.careermatch.com/job-prep/wp-content/uploads/sites/2/2018/09/administrative-assistant.jpg" alt="Image Size 720x400">--}}
                                {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian </h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://futurecio.tech/wp-content/uploads/2020/09/pexels-photo-3840870.jpeg " alt="Image Size 720x400">--}}
                                {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://academics.lmu.edu/media/lmuacademics/extension/images/full-stack-developer.jpg " alt="Image Size 720x400">--}}
                                {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg">
                                {{--                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://www.manateetech.edu/wp-content/uploads/2017/05/IMG_7393-e1495565046548.jpg " alt="Image Size 720x400">--}}
                                {{--                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fingerstache flexitarian</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                <div class="my-5 space-x-1.5">
                                    <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                    <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div id="profile" style="display: block">

            <!-- Profile Display -->
 
<!-- component -->
<style>
    :root {
        --main-color: #272522;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



<div class="bg-gray-100">
 <div class="w-full text-white bg-main-color">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                {{-- <a href="#"
                    class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">example
                    profile</a> --}}
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path> 
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
           
        </div>
    </div>
    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
               
                <form method="post" enctype="multipart/form-data" id="imageChanger" action="{{ route('profile') }}">
                    @csrf
                    <label>
                        <input name="profilePicture" class="hidden" id="file"
                               type="file" {{--onchange="changeImage(event)"--}}/>
                        <img id="output" src="{{ $User->profile_picture }}"
                             class="mb-20 h-56 w-56 object-cover rounded-full">
                    </label>
                </form>
                
                <!-- End of profile card -->
                <div class="my-4"></div>
               </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Name:</div>
                                <div class="px-4 py-2">{{ Auth::user()->name }}</div>
                            </div>
                            <div class="text-gray-700">
                                <div class="grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Email:</div>
                                        <div class="px-4 py-2">{{ Auth::user()->email }}</div>
                                    </div>
                           
                            </div>
                        </div>
                    </div>
                    <button 
                        class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Edit</button>
                </div>
                <!-- End of about section -->
  <!-- About edit -->
             <!-- About Section  edit-->
             <div class="bg-white p-3 shadow-sm hidden rounded-sm">
                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                    <span clas="text-green-500">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="tracking-wide">About</span>
                </div>
                <div class="text-gray-700">
                    <div class="grid md:grid-cols-2 text-sm">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Name:</div>
                            <div class="px-4 py-2"><input type="text" class="border"></div>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid md:grid-cols-2 text-sm">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email:</div>
                                    <div class="px-4 py-2"><input type="text" class="border"></div>
                                </div>
                       
                        </div>
                    </div>
                </div>
                <button 
                    class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Edit</button>
            </div>
            <!-- End of about section -->
<!-- End of about section -->

                <div class="my-4"></div>

                      </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>




 
</div>

        </div>



        <div id="settings" style="display: none">
            <!-- Settings Display -->
            <h1>Rojae Anderson</h1>
        </div>
    </div>
    </body>
@endsection
@section('js')
    <script src="{{ asset('js/Dashboard/toggle.js') }}"></script>

    <script>
        $(document).ready(function () {

let imageChangerForm = $("#imageChanger");

$("#file").on('change', function (event) {

    let image = $("#output")[0];
    image.src = URL.createObjectURL(event.target.files[0]);

    imageChangerForm.submit()



});


});
    </script>
@endsection
