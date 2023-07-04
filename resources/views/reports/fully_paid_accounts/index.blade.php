@extends('layouts.app')
@section('title', 'FULLY PAID ACCOUNTS')
@section('content')

    <!-- Main content -->
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
        </div>
                    @include('components.input')

                <!-- datatable -->
                <div class="container flex justify-center mx-auto ">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 border-b border-gray-200 shadow">
                                <table class="divide-y divide-gray-300" id="generalTable">
                                    <thead class="bg-black">
                                        <tr>
                                            <th class="px-6 py-2 text-xs text-white">
                                                BORROWER
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                CONTACT NO.
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                DOCUMENT NO.
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                DATE RELEASED
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                LOAN DATE
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                RECEIVABLE
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                TOTAL PAYMENT
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                AGENT
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                REMARKS
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                STATUS
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
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">andreikevincasoco@gmail.com</div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021-1-12
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                1
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    Jon doe
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">jhondoe@example.com</div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021-1-12
                                            </td>
                                            <td class="px-6 py-4">
                                                <div
                                                class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                                FULLY
                                            </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div
                                                class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                                PAID
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
