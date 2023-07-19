@extends('layouts.app')
@section('title', 'CREDIT APPLICATION')
@section('content')

        <h1 class="bold text-2xl text-blue-800 ml-6 mb-6">CREDIT APPLICATION</h1>

        <!-- Main content -->
        <div class="card mb-3 bg-white">
            <div class="mb-3 flex justify-between">
                <label>@yield('title')</label>
            </div>
                    @include('components.input')

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
                                                DATE
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                CONTACT NO.
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                MODE OF PAYMENT
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                LOAN PURPOSE
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                LOAN COMPANY
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                CREDIT TERMS
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                STATUS
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                ACTIONS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-300">
                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                1
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    Andrei Kevin
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                6969999
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                6969696
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021-1-12
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021-1-12
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900">
                                                <div
                                                class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                                PAID
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900">
                                                <div
                                                class="mr-2 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                                VIEW
                                                </div>
                                            </td>
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

    @endsection

