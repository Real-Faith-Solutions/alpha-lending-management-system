@extends('layouts.app')
@section('title', 'COLLECTION EFFICIENCY')
@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <!-- Main content -->
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
        </div>
                <!-- datatable -->
                <div class="container flex justify-center mx-auto">
                    <div class="flex flex-col">
                        <div class="w-full">

                             </div>
                        </div>
                     </div>

                    <div class="p-4 border-b border-gray-200 shadow">
                        <table class="divide-y divide-gray-300" id="generalTable">
                            <thead class="bg-black">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        TOTAL NEED TO COLECT
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        TOTAL ACTUTAL COLLECTION
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300">
                                <tr class="text-center">
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        1000000
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            20000000
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        1000000
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            20000000
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        1000000
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            20000000
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        1000000
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            20000000
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        1000000
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            20000000
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
    <script>
        $(document).ready(function () {
            $('#generalTable').DataTable();

        });
    </script>

@endsection
