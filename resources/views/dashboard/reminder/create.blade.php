@extends('layouts.default')

@section('content')



<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 mt-2/12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('reminder.store') }}">
                    @csrf
                    <h1 class="text-xl text-center">Reminder</h1>
                    <br>
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Reminder date <span class="text-red-500">*</span></label></br>
                        <input type="date" class="border-2 border-gray-300 p-2 w-full" name="reminder_date" id="reminder_date">
                        @error('reminder_date')
                                <div class="my-2 block text-sm text-left text-red-500 bg-opacity-20 border border-red-400 h-10 w-2/4 items-center p-4 rounded-md"
                                    role="alert">
                                    {{ $message }}
                                </div>
                        @enderror
                    </div>
                        <div class="mb-4">
                        <label class="text-xl text-gray-600">Remind me about</label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="remind_about" id="remind_about" placeholder="(Optional)">

                        @error('remind_about')
                                <div class="my-2 block text-sm text-left text-red-500 bg-opacity-20 border border-red-400 h-10 w-2/4 items-center p-4 rounded-md"
                                    role="alert">
                                    {{ $message }}
                                </div>
                        @enderror
                    </div>
                    <div class="flex p-1">
                            <select class="border-2 border-gray-300 border-r p-2" name="category_id">
                                <option disabled selected>Note Permission</option>
                                @foreach ($noteCategory as $category )
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
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
@section('js')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js%22%3E"></script>

<script>
    CKEDITOR.replace( 'content' );
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