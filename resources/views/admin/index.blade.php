@extends('layouts.adminDefault')

@section('title')
    <title>{{ config('app.name') }}Admin Dashboard</title>
@endsection

@section('admin-panel')
    Admin Dashboard
@endsection
@section('js')
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Welcome Admin',
                text: '🤘🏾💀🤘🏾',
                // footer: '<a href="">Why do I have this issue?</a>'
            })
        </script>
    @endif
@endsection
