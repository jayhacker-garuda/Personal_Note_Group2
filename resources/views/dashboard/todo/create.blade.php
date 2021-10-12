@extends('layouts.default')

@section('content')



<<<<<<< HEAD
<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 mt-2/12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('todo.store') }}">
                    @csrf
                    <h1 class="text-xl text-center">ToDo</h1>
                    <br>
                    <input type="hidden" name="note_category_id" value="">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Date <span class="text-red-500">*</span></label></br>
                        <input type="date" class="border-2 border-gray-300 p-2 w-full" name="todo_date" id="todo_date" value="{{ old('todo_date') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Task</label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="todo" id="todo" placeholder="(Optional)">
                    </div>

{{--                        <div class="mb-8">--}}
{{--                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>--}}
{{--                            <textarea name="content" class="border-2 border-gray-500">--}}
{{--                                --}}
{{--                            </textarea>--}}
{{--                        </div>--}}

                    <div class="flex p-1">
                        <select class="border-2 border-gray-300 border-r p-2" name="action">
                            <option>Set as public</option>
                            <option>Set as private</option>
                        </select>
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                    </div>
                </form>
=======
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 mt-2/12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('todo.store') }}">
                        @csrf
                        <h1 class="text-xl text-center">ToDo</h1>
                        <br>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Date <span class="text-red-500">*</span></label></br>
                            <input type="date" class="border-2 border-gray-300 p-2 w-full" name="todo_date" id="todo_date"
                                value="{{ old('todo_date') }}">
                                @error('todo_date')
                                <div class="my-2 block text-sm text-left text-red-500 bg-opacity-20 border border-red-400 h-10 w-2/4 items-center p-4 rounded-md"
                                    role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Task</label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="todo" id="todo"
                                placeholder="(Optional)">
                                @error('todo')
                                <div class="my-2 block text-sm text-left text-red-500 bg-opacity-20 border border-red-400 h-10 w-2/4 items-center p-4 rounded-md"
                                    role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="flex p-1">
                            <select class="border-2 border-gray-300 border-r p-2" name="category_id">
                                <option disabled selected>Note Permission</option>
                                @foreach ($noteCategory as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="my-2 block text-sm text-left text-red-500 bg-opacity-20 border border-red-400 h-10 w-2/4 items-center p-4 rounded-md"
                                    role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400">Submit</button>
                    </form>
                </div>
>>>>>>> 332c309cef16869a5fc5b83b0c2700b4afab0c90
            </div>
        </div>
    </div>


@endsection
@section('js')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js%22%3E"></script>

    <script>
        CKEDITOR.replace('content');
    </script>

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
