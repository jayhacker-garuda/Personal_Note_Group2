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
<<<<<<< HEAD
                            <h1 class="sm:text-4xl text-5xl font-bold title-font mb-2 text-gray-900">To Do List</h1>
=======
                            <h1 class="sm:text-4xl text-5xl font-medium  title-font mb-2 text-gray-900">To Do List</h1>
>>>>>>> Rojae-branch
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
        <div id="profile" style="display: none">
            <!-- Profile Display -->
            <h1>Showayne Anderson</h1>
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
