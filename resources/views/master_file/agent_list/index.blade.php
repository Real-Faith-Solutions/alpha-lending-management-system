@extends('layouts.app')
@section('title', 'AGENT LIST')
@section('content')

        <!-- Overlay element -->
        <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-400 bg-opacity-60"></div>

        <!-- The dialog -->
        <div id="dialog" class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-11/12 sm:w-3/5 md:w-1/2 lg:w-1/3 bg-white rounded-md px-4 sm:px-8 py-6 space-y-5 sm:space-y-6 drop-shadow-lg">
            <h1 class="text-2xl font-semibold text-blue-500 text-center">ADD AGENT LIST</h1>
            <div class="w-full">
                <form class="bg-white shadow-md rounded px-4 sm:px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                            Full Name:
                            <input class="shadow appearance-none border rounded w-full sm:w-4/5 mt-2 sm:ml-14 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="Firstname, Lastname" required>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                            Address:
                            <input class="shadow appearance-none border rounded w-full sm:w-4/5 mt-2 sm:ml-14 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="address" id="address" placeholder="House number, Street, Subdivision, Barangay, City, Province" required>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                            ID Number:
                            <input class="shadow appearance-none border rounded w-full sm:w-4/5 mt-2 sm:ml-14 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="valid_id_number" id="valid_id_number" placeholder="123-456-789-0123" required>
                        </label>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:justify-end mt-6">
                        <button id="close" class="mb-2 sm:mb-0 w-full sm:w-auto px-4 py-2 bg-white hover:bg-gray-500 text-gray-700 cursor-pointer rounded-md border-solid border-2 border-gray-600">
                            Back To List
                        </button>

                        <button id="close" class="w-full sm:w-auto px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white cursor-pointer rounded-md">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <h1 class="bold text-2xl text-blue-800 ml-6 mb-6">AGENT LIST</h1>

        <!-- Main content -->
        <div class="card mb-3 bg-white">
            <div class="mb-3 flex justify-between">
                <label>@yield('title')</label>
            </div>
                    @include('components.input')

                     <!-- button -->
                     <div class="mt-6 mb-3 flex items-center justify-end">
                        <button class="w-40 py-3 px-4  text-center bg-indigo-600 rounded-md text-white text-sm hover:bg-indigo-500" data-bs-toggle="modal" data-bs-target="#addCollector" id="collector"> Add Agent List</button>
                    </div>

               <!-- datatable -->
               <div class="container mx-auto overflow-x-auto">
                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="p-4 border-b border-gray-200 shadow">
                            <div class="overflow-x-auto">
                                <table class="table-auto w-full divide-y divide-gray-300" id="generalTable">
                                    <thead class="bg-black">
                                        <tr>
                                            <th class="px-6 py-2 text-xs text-white">
                                                CLIENT NAME
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                CLIENT ADDRESS
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                VALID ID NUMBER
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                VIEW
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-300">
                                        <tr class="text-center">

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <!-- Modal -->
    <script>
    var openButton = document.getElementById('collector');
    var dialog = document.getElementById('dialog');
    var closeButton = document.getElementById('close');
    var overlay = document.getElementById('overlay');

    // show the overlay and the dialog
    openButton.addEventListener('click', function () {
        dialog.classList.remove('hidden');
        overlay.classList.remove('hidden');
    });

    // hide the overlay and the dialog
    closeButton.addEventListener('click', function () {
        dialog.classList.add('hidden');
        overlay.classList.add('hidden');
    });
    </script>

    @endsection

