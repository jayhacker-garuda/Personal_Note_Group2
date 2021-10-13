@extends('layouts.adminDefault')

@section('title')
    <title>{{ config('app.name') }}Admin Dashboard</title>
@endsection

@section('admin-panel')
    <div class="mt-6">
        <div role="alert" id="success_message"></div>
        <h2 class="text-xl font-semibold text-gray-700 leading-tight">All Users</h2>

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                User</th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Rol</th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Created at</th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Status</th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody id="UsersTable">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                      </tbody>
                    </table>
            </div>
        </div>
    </div>
    <div class="mt-6">
        <h2 class="text-xl font-semibold text-gray-700 leading-tight">Deactivated Users</h2>

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                User
                            </th>
                            
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Deactivated At
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="notActive">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- editUserModal -->

          <section id="editUserModal" class="hidden text-blueGray-700 fixed z-10 inset-0 bg-black bg-transparent bg-opacity-75 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="container items-center px-5 py-12 lg:px-20">
              <div class="flex flex-col w-full p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-2/6 md:w-1/2 md:mt-0">
                <div class="relative mt-4">
                    <h3 id="user_name"></h3>
                    <span id="active_status"></span>
                </div>
                <div class="relative">
                    <input hidden type="text" id="edit_user_id">
                </div>
                <div class="relative mt-4">
                  <label for="edit_user_name" class="text-base leading-7 text-blueGray-500">Name:</label>
                  <input type="name" id="edit_user_name" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blue-300 focus:border-blue-500 focus:bg-gray-300 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                </div>
                <div class="relative mt-4">
                  <label for="edit_user_name" class="text-base leading-7 text-blueGray-500">Email:</label>
                  <input type="email" id="edit_user_email" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blue-300 focus:border-blue-500 focus:bg-gray-300 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                </div>
                <div class="inline-flex flex-wrap items-center justify-between ">
                  <button data-bs-dismiss="modal" type="button" class="close-modal-edit w-full px-4 py-2 my-2 font-medium text-blue-300 transition duration-500 ease-in-out transform bg-blue-100 border-blueGray-100 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-200 hover:text-blue-700">Close</button>
                  <button type="button" class="update_status w-full px-4 py-2 my-2 font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 border-blueGray-100 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-200 hover:text-blue-900">Change Status</button>
                </div>
                <ul role="alert" id="updateForm_errList"></ul>
                <p class="mx-auto mt-3 text-xs text-blueGray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, veritatis?</p>
              </div>
            </div>
          </section>
        
    <!-- end editUserModal -->
@endsection
@section('css')
    <style>
        ::-webkit-scrollbar {
            width: 7px;
            height: 7px;
        }

        ::-webkit-scrollbar-track {
            background: #2D3748;
        }

        ::-webkit-scrollbar-thumb {
            background: #CBD5E0;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #718096;
        }

    </style>
@endsection
@section('js')
<script src="{{ asset('js/Admin/user-data.js') }}"></script>
<script src="{{ asset('js/Admin/deactiveUser.js') }}"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
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
