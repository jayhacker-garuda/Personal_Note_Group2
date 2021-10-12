@extends('layouts.default')

@section('title')
    <title>{{ config('app.name') }}User-Dashboard</title>
@endsection

@section('content')
    {{-- <link --}}
    {{-- href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" --}}
    {{-- rel="stylesheet" --}}
    {{-- /> --}}
    <!--  Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <div class="h-full">
        <div class="py-2 flex">
            <div class="p-2 space-x-1.5 mt-12">
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
        <div class="bg-gray-400">
            <div class="flex items-center  justify-center  h-screen mb-5 overflow-hidden bg-center bg-cover"
                style="margin-top: -3.5%; background-image: url(https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80)">
                <div class=" p-8 text-2xl text-white bg-black bg-opacity-25 rounded-xl" style="margin-top: -2%">
                    <div class="text-center">
                        <h1 class="text-white text-6xl font-bold">Welcome To Personal Notes</h1>
                        <div class="my-3"></div>
                        <h2 class="text-white text-5xl font-bold">{{ Auth::user()->name }}</h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mb-20 items-center justify-center" style="margin-top: -14%">
                <div
                    class="py-5 rounded-2xl bg-gradient-to-r from-gray-600 via-black to-gray-600 w-auto text-center text-white p-8 ">
                    <h1>View others post</h1>
                    <div class="my-5"></div>
                    <a href="" class="bg-white rounded text-black p-3 w-3/12 mt-4 px-3 py-2">view</a>
                </div>
                <div class="mx-10"></div>
                <div
                    class="py-5 rounded-2xl bg-gradient-to-r from-gray-600 via-black to-gray-600 w-auto text-center text-white p-8 ">
                    <h1>Create a Personal</h1>
                    <div class="my-5"></div>
                    {{-- <a href="{{ url('dashboard/personal/create') }}" --}}
                    <a href="{{ route('personal.create') }}"
                        class="bg-white rounded text-black p-3 w-3/12 mt-4 px-3 py-2">Create</a>
                </div>
                <div class="mx-10"></div>
                <div
                    class="py-5 rounded-2xl bg-gradient-to-r from-gray-600 via-black to-gray-600 w-auto text-center text-white p-8 ">
                    <h1>Create a Reminder</h1>
                    <div class="my-5"></div>
                    <a href="{{ route('reminder.create') }}"
                        class="bg-white rounded text-black p-3 w-3/12 mt-4 px-3 py-2">Create</a>
                </div>
                <div class="mx-10"></div>
                <div
                    class="py-5 rounded-2xl bg-gradient-to-r from-gray-600 via-black to-gray-600 w-auto text-center text-white p-8 ">
                    <h1>Create a Todo</h1>
                    <div class="my-5"></div>
                    <a href="{{ route('todo.create') }}"
                        class="bg-white rounded text-black p-3 w-3/12 mt-4 px-3 py-2">Create</a>
                </div>
            </div>



            {{-- <div class="my-5"></div> --}}
            <div id="home" class="bg-gray-400" style="display: block">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="container px-5 py-8 mx-auto max-w-7x1">
                                <div class="flex flex-wrap w-full mb-4 p-4">
                                    <div class="w-full mb-6 lg:mb-0">
                                        <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900">Todo List
                                        </h1>
                                        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap -m-4">
                                    @forelse ($todoNote as $tnote )
                                        <div class="xl:w-1/3 md:w-1/2 p-4">
                                        <div class="bg-white p-6 rounded-lg">
                                            <div class="flex justify-between">

                                                <div>
                                                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ $tnote->todo_date }}
                                                        </h2>

                                                    </div>
                                                    <div>
                                                        @if ($tnote->noteCategory->name === 'Private')
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                                </svg>
                                                            </span>
                                                        @else
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                                                </svg>
                                                            </span>
                                                        @endif
                                                        <span
                                                            class="text-gray-300">{{ $tnote->noteCategory->name }}</span>
                                                    </div>
                                                </div>
                                            <p class="leading-relaxed text-base">{{ $tnote->todo }}</p>
                                            <div class="my-5 space-x-1.5">
                                                <a href="" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                                <a href="" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    @empty

                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container px-5 py-8 mx-auto max-w-7x1">
                                <div class="flex flex-wrap w-full mb-4 p-4">
                                    <div class="w-full mb-6 lg:mb-0">
                                        <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900">Reminder
                                            List
                                        </h1>
                                        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap -m-4">
                                    @foreach ($reminderNote as $rnote)
                                        <div class="xl:w-1/3 md:w-1/2 p-4">
                                            <div class="bg-white p-6 rounded-lg">
                                                <div class="flex justify-between">

                                                    <div>
                                                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                                                            {{ $rnote->reminder_date }}
                                                        </h2>

                                                    </div>
                                                    <div>
                                                        @if ($rnote->noteCategory->name === 'Private')
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                                </svg>
                                                            </span>
                                                        @else
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                                                </svg>
                                                            </span>
                                                        @endif
                                                        <span
                                                            class="text-gray-300">{{ $rnote->noteCategory->name }}</span>
                                                    </div>
                                                </div>
                                                <p class="leading-relaxed text-base">{{ $rnote->remind_about }}</p>
                                                <div class="my-5 space-x-1.5">
                                                    <a href="#" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                                    <a href="#" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container px-5 py-8 mx-auto max-w-7x1">
                                <div class="flex flex-wrap w-full mb-4 p-4">
                                    <div class="w-full mb-6 lg:mb-0">
                                        <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900">Personal
                                        </h1>
                                        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap -m-4">
                                    @foreach ($personalNote as $pnote)
                                        <div class="xl:w-1/3 md:w-1/2 p-4">
                                            <div class="bg-white p-6 rounded-lg">
                                                <div class="flex justify-between">
                                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                                                        {{ $pnote->title }}
                                                    </h2>
                                                    <div>
                                                        @if ($pnote->noteCategory->name === 'Private')
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                                </svg>
                                                            </span>
                                                        @else
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                                                </svg>
                                                            </span>
                                                        @endif
                                                        <span
                                                            class="text-gray-300">{{ $pnote->noteCategory->name }}</span>
                                                    </div>
                                                </div>
                                                <p class="leading-relaxed text-base">{{ $pnote->description }}</p>
                                                <div class="my-5 space-x-1.5">
                                                    <a href="#" class="p-2 py-2 bg-green-500 rounded text-black">Edit</a>
                                                    <a href="#" class="p-2 py-2 bg-red-500 rounded text-black">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- Swiper JS -->
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                <script>
                    var swiper = new Swiper('.mySwiper', {
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    });
                </script>

            </div>

            <div id="profile" style="display: none">

                <!-- Profile Display -->


                {{-- {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



                <div class="">
                    <div class=" w-full text-white">
                        <div x-data="{ open: false }"
                            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                            <div class="p-4 flex flex-row items-center justify-between">
                                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline"
                                    @click="open = !open">
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

                                <form method="post" enctype="multipart/form-data" id="imageChanger"
                                    action="{{ route('profile') }}">
                                    @csrf
                                    <label>
                                        <input name="profilePicture" class="hidden" id="file" type="file"
                                            {{-- onchange="changeImage(event)" --}} />
                                        <img id="output"
                                            src="{{ url('/storage/media/' . Auth::user()->profile_picture) }}"
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
                                <div class="bg-white p-3 shadow-sm rounded-2xl mb-10">
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                        <span clas="text-green-500">
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </span>
                                        <span class="tracking-wide">About</span>
                                        <span>
                                            <button onclick="switchDiv()" id="editBtn"
                                                class="w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Edit</button>
                                        </span>
                                    </div>
                                    <div class="text-gray-700">
                                        <div id="editProfile" class="grid md:grid-cols-2 text-sm" style="display: none">
                                            <form action="{{ route('dashboard.edit', Auth::user()->id) }}" method="POST">
                                                @csrf
                                                <div class="flex-row">
                                                    <div class="flex-col">
                                                        <div class="px-4 py-2">
                                                            <input type="text" name="name" class="border form-input"
                                                                placeholder="NAME">
                                                            @error('name')
                                                                <span>{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="flex-col">
                                                        <div class="px-4 py-2">
                                                            <input type="text" name="email" class="border form-input"
                                                                placeholder="EMAIL">
                                                            @error('email')
                                                                <span>{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="gap-2">
                                                            <button
                                                                class="text-sm rounded-lg hover:bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-gray-200 hover:shadow-xs p-3 my-4">Change</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div id="change" class="grid md:grid-cols-2 text-sm" style="display: block">
                                            {{-- <div class="grid grid-cols-2"> --}}
                                            <div class="px-4 py-2 font-semibold">Name:</div>
                                            <div class="px-4 py-2">{{ Auth::user()->name }}</div>
                                            {{-- </div> --}}
                                            <div class="text-gray-700">
                                                <div class="grid md:grid-cols-2 text-sm">
                                                    <div class="grid grid-cols-2">
                                                        <div class="px-4 py-2 font-semibold">Email:</div>
                                                        <div class="px-4 py-2">{{ Auth::user()->email }}</div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- End of about section -->
                        <!-- About Section  edit-->

                        <!-- End of profile tab -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    <div id="settings" style="display: none">
        <!-- Settings Display -->
        <h1 class="text-3xl font-bold">Settings</h1>
        <div class="flex flex-col items-center justify-center mt-1/12 mb-2 overflow-hidden">
            <h1 class="text-3xl text-center">Deactivate Button</h1>
            <div class="w-2/6">
                <a href="#"
                    class="text-center bg-black hover:text-red-600 block w-full p-5 my-2 text-sm font-semibold text-white rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline  hover:shadow-xs">
                    Deactivate</a>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('css')

@endsection
@section('js')
    <script src="{{ asset('js/Dashboard/toggle.js') }}"></script>
    <script src="{{ asset('js/Dashboard/toggleEdit.js') }}"></script>
    <script>
        $(document).ready(function() {

            let imageChangerForm = $("#imageChanger");

            $("#file").on('change', function(event) {

                let image = $("#output")[0];
                image.src = URL.createObjectURL(event.target.files[0]);

                imageChangerForm.submit()



            });


        });
    </script>
    @if (session()->has('personal-note'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Personal Note Added',
                text: '📝📝📝',
                // footer: '<a href="">Why do I have this issue?</a>'
            })
        </script>
    @endif
    @if (session()->has('reminder-note'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Reminder Note Added',
                text: '📝📝📝',
                // footer: '<a href="">Why do I have this issue?</a>'
            })
        </script>
    @endif
    @if (session()->has('todo-note'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Todo Note Added',
                text: '📝📝📝',
                // footer: '<a href="">Why do I have this issue?</a>'
            })
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Welcome User',
                text: '🤘🏾💀🤘🏾',
                // footer: '<a href="">Why do I have this issue?</a>'
            })
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'something went wrong',
                text: '📝📝📝',
                footer: '<a href="/contact-us">Why do I have this issue?</a>'
            })
        </script>
    @endif
@endsection
