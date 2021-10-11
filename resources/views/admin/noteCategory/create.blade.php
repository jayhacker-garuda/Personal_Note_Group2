@extends('layouts.adminDefault')

@section('title')
    <title>{{ config('app.name') }}Add Note Category</title>
@endsection

@section('admin-panel')
    <button class="px-6 py-3 bg-gray-600 rounded-md text-white font-medium tracking-wide hover:bg-gray-500 cursor-pointer"
        onclick="toggleModal()">Button</button>
    <div class="mt-4 hidden" id="modal">
        <div class="max-w-sm w-full bg-white shadow-md rounded-md overflow-hidden border">
            <div class="flex justify-between items-center px-5 py-3 text-gray-700 border-b">
                <h3 class="text-sm">Add Category</h3>
                <button>
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            
            <form action="{{ route('admin.note-category.store') }}" method="POST">
                @csrf
            <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                <label class="text-xs">Name</label>
                
                <div class="mt-2 relative rounded-md shadow-sm">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z">
                        </path>
                            </svg>
                        </span>

                        <input type="text" name="name"
                            class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600">
                            @error('name')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                    </div>
                </div>

                <div class="flex justify-between items-center px-5 py-3">
                    <button type="button"
                        class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none"
                        onclick="toggleModal()">Cancel</button>
                    <button
                        class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function toggleModal() {
            document.getElementById('modal').classList.toggle('hidden')
        }
    </script>
@endsection
