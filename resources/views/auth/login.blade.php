@extends('layouts.default')

@section('title')
    <title>{{ config('app.name') }}Login</title>
@endsection

@section('content')
    <div class="min-h-screen bg-no-repeat bg-cover bg-fixed"
         style="background-image: url('https://www.sysmex-ap.com/new-zealand/wp-content/uploads/sites/13/2020/05/Company-Press-Release.jpg  ')">
        <div class="flex justify-end">
            <div class="bg-white min-h-screen w-1/2 flex justify-center items-center">
                <div>

                    <form action="3" method="post">
                        <div>
                            <span class="text-sm text-gray-900 text"><h1 class="text-3xl text-center">Welcome back</h1></span>
                            <h1 class="text-5xl font-bold">Login to your account</h1>
                        </div>

                        <div class="mt-5">
                            <label class="block text-md mb-2" for="email">Email</label>
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="email" name="password" placeholder="email">
                        </div>
                        <div class="my-3">
                            <label class="block text-md mb-2" for="password">Password</label>
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="password" name="password" placeholder="password">
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <input class="cursor-pointer"  type="radio" name="rememberme">
                                <span class="text-sm">Remember Me</span>
                            </div>
                            <span class="text-sm text-blue-700 hover:underline cursor-pointer">Forgot password?</span>
                        </div>
                        <div class="">
                            <button class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-4 rounded-md transition duration-100">Login now</button>
{{--                            <div class="flex  space-x-2 justify-center items-end bg-gray-700 hover:bg-gray-600 text-white py-2 rounded-md transition duration-100"">--}}

{{--                            <img class=" h-5 cursor-pointer" src="https://i.imgur.com/arC60SB.png" alt="">--}}
{{--                            <button >Or sign-in with google</button>--}}
{{--                        </div>--}}
                </div>
                </form>
                <p class="mt-2"> Dont have an account? <span class="cursor-pointer text-sm text-blue-600"> <a
                            href="{{ route('register') }}">Sign Up now</a></span></p>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
