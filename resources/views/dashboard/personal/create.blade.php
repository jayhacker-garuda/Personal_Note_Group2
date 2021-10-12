@extends('layouts.default')

@section('content')

    <div class="py-2/12">

        <div class="max-w-3xl mx-auto sm:px-6 lg:px-10 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (session()->has('message'))
                        <div class="bg-green-300 py-2 px-4 text-white">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('personal.store') }}">
                        @csrf
                        <h1 class="text-4xl font-bold text-black text-center mb-5"> Personal</h1>
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title</label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Description</label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" placeholder="">
                        </div>


                        <div class="flex p-1">
                            <select class="border-2 border-gray-300 border-r p-2" name="category_id">
                                <option disabled selected>Note Permission</option>
                                @foreach ($noteCategory as $category )
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    
                                @endforeach
                            </select>
                            <button type="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>

@endsection
