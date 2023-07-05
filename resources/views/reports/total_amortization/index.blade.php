@extends('layouts.app')
@section('title', 'TOTAL AMORTIZATION')
@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

        <!-- Main content -->
        <div class="card mb-3 bg-white">
            <div class="mb-3 flex justify-between">
                <label>@yield('title')</label>
            </div>
                        <div class="grid grid-cols-3 gap-1 text-left">
                            <div class="col-span-1 h-20 bg-black-100">
                                <label for="basic-url" class="form-label">Select periodic</label>
                                <div class="input-group mb-3">
                                  <select class="form-control" id="inputGroupSelect02">
                                    <option selected>------</option>
                                      <option value="1">Daily</option>
                                      <option value="2">Weekly</option>
                                      <option value="3">Monthly</option>
                                      <option value="4">Semi Annually 1</option>
                                      <option value="5">Semi Annually 2</option>
                                      <option value="6">Annually</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-1 h-20 bg-black-100">
                                <label for="basic-url" class="form-label">From</label>
                                      <div class="input-group mb-3">
                                        <input type="date" class="form-control"></input>
                                      </div>
                            </div>
                            <div class="col-span-1 h-20 bg-black-100">
                                <label for="basic-url" class="form-label">To</label>
                                      <div class="input-group mb-3">
                                        <input type="date" class="form-control"></input>
                                        </div>
                            </div>
                        </div>

                        <!-- button -->
                        <div class="mt-6 mb-3 flex items-center justify-center">
                            <button class="w-40 py-3 px-4  text-center bg-indigo-600 rounded-md text-white text-sm hover:bg-indigo-500" data-bs-toggle="modal" data-bs-target="#addPayment"><i class="fa fa-plus"></i> Add Payment</button>
                        </div>

                        <!-- datatable -->
                        <div class="container flex justify-center mx-auto">
                            <div class="flex flex-col">
                                <div class="w-full">

                                    </div>
                                </div>
                            </div>

                            <div class="p-4 border-b border-gray-200 shadow">
                                <table class="divide-y divide-gray-900" id="generalTable">
                                    <thead class="bg-black">
                                        <tr>
                                            <th class="px-6 py-2 text-xs text-white">
                                                MONTHLY
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                QUARTERLY
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                SEMI-ANNUAL
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                ANNUAL
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-300">
                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                10000
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    200000
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    300000
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    696969696
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                10000
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    200000
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    300000
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    696969696
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                10000
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    200000
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    300000
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    696969696
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                10000
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    200000
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    300000
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    696969696
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="text-center">
                                                <td class="px-6 py-4 text-sm text-gray-900">
                                                    10000
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                        200000
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                        300000
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                        696969696
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
