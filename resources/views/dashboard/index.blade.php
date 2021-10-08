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
<div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
    <img class="w-full h-56 object-cover object-center" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
    <div class="flex items-center px-6 py-3 bg-gray-900">
        <svg class="h-6 w-6 text-white fill-current" viewBox="0 0 512 512">
            {{-- <path d="M256 48C150 48 64 136.2 64 245.1v153.3c0 36.3 28.6 65.7 64 65.7h64V288h-85.3v-42.9c0-84.7 66.8-153.3 149.3-153.3s149.3 68.5 149.3 153.3V288H320v176h64c35.4 0 64-29.3 64-65.7V245.1C448 136.2 362 48 256 48z"/> --}}
        </svg>
        <button >
            <h1 class="mx-3 text-white font-semibold text-lg">Edit Picture</h1>      
         
        </button>
    </div>
    <div class="py-4 px-6">
        <h1 class="text-2xl font-semibold text-gray-800">User name</h1>
        {{-- <p class="py-2 text-lg text-gray-700">Full Stack maker & UI / UX Designer , love hip hop music Author of Building UI.</p> --}}
        {{-- <div class="flex items-center mt-4 text-gray-700">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                <path d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z"/><g><path d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z"/></g>
            </svg>
            <h1 class="px-2 text-sm">MerakiTeam</h1>
        </div>
        <div class="flex items-center mt-4 text-gray-700">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z"/>
            </svg>
            <h1 class="px-2 text-sm">California</h1>
        </div> --}}
        <div class="flex items-center mt-4 text-gray-700">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"/>
            </svg>
            <h1 class="px-2 text-sm">email@example.com</h1>

            
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
@endsection
