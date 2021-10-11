@extends('layouts.adminDefault')

@section('title')
    <title>{{ config('app.name') }}Admin Dashboard</title>
@endsection

@section('admin-panel')

@endsection
@section('css')
   <style>
       ::-webkit-scrollbar {
  width: 7px;
  height: 7px;
}

::-webkit-scrollbar-track{
  background: #2D3748;
}

::-webkit-scrollbar-thumb{
  background: #CBD5E0;
}

::-webkit-scrollbar-thumb:hover{
  background: #718096;
}
   </style>
@endsection
@section('js')
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

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
