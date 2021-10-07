<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}Home</title>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
@extends('layouts.default')
@section('content')
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">

<div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="">Personal Notes</h1>
            </div>
        </div>
    </div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
@endsection
</html>
