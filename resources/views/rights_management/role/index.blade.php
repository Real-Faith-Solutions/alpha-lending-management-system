@extends('layouts.app')
@section('title', 'ROLE LIST')
@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
                 <a class="px-5 py-2 bg-blue-500 hover:bg-blue-700 text-white cursor-pointer rounded-md" href="#">ADD NEW ROLE</a>
        </div>

        <div class="container mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="p-4 border-b border-gray-200 shadow">
                        <!-- <table> -->
                        <table id="dataTable" class="w-full border-solid border-2 border-black-900">
                            <thead class="bg-black">
                                <tr>
                                    <th scope="row" class="px-6 py-2 text-xs text-white">
                                        NAME
                                    </th>
                                    <th scope="row" class="px-6 py-2 text-xs text-white">
                                        ROLES
                                    </th>
                                    <th scope="row" class="px-6 py-2 text-xs text-white">
                                        EDIT
                                    </th>
                                    <th scope="row" class="px-6 py-2 text-xs text-white">
                                        DELETE
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="bg-gray-50 text-center">
                                        <td class="px-6 py-4 font-medium text-gray-900">
                                           ADMIN
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900">
                                         -----
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900">
                                            <a href="#" class="inline-block text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                        </td>

                                        <td class="px-6 py-4 font-medium text-gray-900">
                                            <a href="#" class="inline-block text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                        </td>
                                </tr>

                                <tr class="p-4 bg-gray-50 text-center">
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                       APPROVER
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                     -----
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        <a href="#" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                    </td>

                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        <a href="#" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>

                                <tr class="p-4 bg-gray-50 text-center">
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                       CASE MANAGER
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                     -----
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        <a href="#" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                    </td>

                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        <a href="#" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
             });
</script>
@endsection
