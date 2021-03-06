@extends('layouts.adminDefault')

@section('title')
    <title>{{ config('app.name') }}Admin Login</title>
@endsection

@section('admin-panel')
    <section class="flex flex-col items-center h-screen md:flex-row ">
        <div class="relative hidden w-full h-screen bg-gray-400 lg:block md:w-1/3 xl:w-1/3">
            <img src="{{ url('/storage/images/personalNote-1.jpg') }}" alt="" class="absolute object-cover w-full h-full">
        </div>
        <div
            class="flex w-full h-screen px-6 bg-whitelack md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 lg:px-16 xl:px-12 items-left justify-left">
            <div class="w-full py-32 lg:py-6 lg:h-100">
                <h1 class="my-12 font-black tracking-tighter text-black 2xl sm:text-5xl title-font">Admin Login.</h1>
                <div class="flex justify-enter">
                    <button type="button"
                        class="inline-flex w-full px-4 py-3 font-semibold text-black transition duration-500 ease-in-out transform bg-white border rounded-lg border-gray-300 hover:bg-black hover:text-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" "="">
                                                            <div class="        flex items-center justify-center ">
                        <svg xmlns=" http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" <svg=""
                            class="w-6 h-6" viewBox="0 0 48 48">
                            <defs>
                                <path id="a"
                                    d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z">
                                </path>
                            </defs>
                            <clipPath id="b">
                                <use xlink:href="#a" overflow="visible"></use>
                            </clipPath>
                            <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"></path>
                            <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"></path>
                            <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"></path>
                            <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"></path>
                        </svg>
                        <span class="ml-4"> Log in with Google </span>
                </div>
                </button>
                <button type="button"
                    class="inline-flex px-4 py-3 ml-8 font-semibold text-blue-800 border rounded-lg border-gray-300 bg-black hover:bg-blue-800 focus:bg-gray-100 hover:text-blue-500">
                    <div class="flex items-center justify-center">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </div>
                </button>
            </div>
            <form class="mt-6" action="{{ route('admin.adminLogin') }}" method="POST">
                @csrf
                <div>
                    <label class="text-base font-medium leading-relaxed text-gray-700">Email Address</label>
                    <input type="email" name="email" id="" placeholder="Your Email "
                        class="w-full px-4 py-2 mt-2 text-base text-black border-transparent rounded-lg bg-gray-300 ext-gray-700 focus:border-gray-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                    @error('email')
                        <div class="flex text-red-400 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 icon icon-tabler icon-tabler-alert-triangle"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                <polyline points="11 12 12 12 12 16 13 16"></polyline>
                            </svg>
                            <p class="text-sm font-semibold tracking-wide uppercase ">
                                <strong>Error:</strong>{{ $message }}.
                            </p>
                        </div>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="text-base font-medium leading-relaxed">Password</label>
                    <input type="password" name="password" id="" placeholder="Your Password"
                        class="w-full px-4 py-2 mt-2 text-base text-black border-gray-300 rounded-lg bg-gray-300 ext-gray-700 focus:border-gray-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                    @error('password')
                        <div class="flex text-red-400 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 icon icon-tabler icon-tabler-alert-triangle"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                <polyline points="11 12 12 12 12 16 13 16"></polyline>
                            </svg>
                            <p class="text-sm font-semibold tracking-wide uppercase ">
                                <strong>Error:</strong>{{ $message }}.
                            </p>
                        </div>
                    @enderror
                </div>
                <div class="mt-2 text-right">
                    <a href="#"
                        class="text-sm font-semibold leading-relaxed text-gray-700 hover:text-red-500 focus:text-red-500">Forgot
                        Password?</a>
                </div>
                <button type="submit"
                    class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform rounded-lg bg-gradient-to-r from-black hover:from-black to-black focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 hover:to-black">Log
                    In</button>
            </form>
        </div>
        </div>
    </section>
@endsection
@section('js')
    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="">Why do I have this issue?</a>'
            })
        </script>
    @endif
@endsection
