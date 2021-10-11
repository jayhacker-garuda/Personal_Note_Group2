@extends('layouts.default')

@section('title')
    <title>{{ config('app.name') }}Register</title>
@endsection

@section('content')
    <body class="bg-white">
    <div class="flex min-h-screen bg-white">

        <div class="w-1/2 bg-cover md:block hidden" style="background-image:  url(https://images.unsplash.com/photo-1520243947988-b7b79f7873e9?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDd8fGJsYWNrJTIwZm9yZXN0fGVufDB8fDB8eWVsbG93&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60)"></div>
        <!-- <div class="bg-no-repeat bg-right bg-cover max-w-max max-h-8 h-12 overflow-hidden">
            <img src="log_in.webp" alt="hey">
        </div> -->


        <div class="md:w-1/2 max-w-lg mx-auto my-24 px-4 py-5 shadow-none">

            <div class="text-left p-0 font-sans">

                <h1 class=" text-gray-800 text-4xl font-medium text-center mb-10">Create an account for free</h1>
{{--                <h3 class="p-1 text-gray-700">Free forever. No payment needed.</h3>--}}
            </div>
            <form action="{{ route('auth.saveUser') }}" method="POST" class="p-0">
                @csrf
                <div class="mt-5">

                    <!-- <label for="email" class="sc-bqyKva ePvcBv">Email</label> -->
                    <input type="email" name="email" class="block w-full p-2 border rounded border-gray-300  focus:ring-1 focus:ring-gray-400 focus:border-transparent" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                        <span class="text-red-400 ml-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mt-5">
                    <input type="text" name="name" class="block w-full p-2 border rounded border-gray-300  focus:ring-1 focus:ring-gray-400 focus:border-transparent" value="{{ old('name') }}" placeholder="Name">
                    @error('name')
                        <span class="text-red-400 ml-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mt-5">
                    <input type="password" name="password" class="block w-full p-2 border rounded border-gray-300 focus:ring-1 focus:ring-gray-400 focus:border-transparent" placeholder="Password">
                    @error('password')
                        <span class="text-red-400 ml-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mt-5">
                    <input type="password" name="confirm-password" class="block w-full p-2 border rounded border-gray-300 focus:ring-1 focus:ring-gray-400 focus:border-transparent" placeholder="Confirm Password">
                    @error('confirm-password')
                        <span class="text-red-400 ml-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mt-6 block p-5 md:font-sans text-xs text-gray-800">
                    <input type="checkbox" class="inline-block border-0  ">
                    <span display="inline" class="">By creating an account you are agreeing to our
                        <a class="" href="#" target="_blank" data-test="Link">
                        <span class="underline ">Terms and Conditions</span> </a> and
                    <a class="" href="#" target="_blank" data-test="Link">
                        <span class="underline">Privacy Policy</span> </a>
                    </span>
                </div>

                <div class="mt-10">
                    <input type="submit" value="Sign up " class="py-3 bg-black text-white w-full rounded">
                </div>
            </form>
            <a class="" href="{{ route('login') }}" data-test="Link"><span class="block  p-5 text-center text-gray-800  text-xs ">Already have an account?</span></a>
        </div>


    </div>
    </body>

@endsection
