@extends('layouts.app')
@section('title', 'PRINT VOUCHER')
@section('content')

    <!-- Main content -->
    <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <h1 class="bold text-2xl text-blue-800 mb-6">Print Voucher</h1>
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            {{-- <label>@yield('title')</label> --}}
        </div>
            @include('components.input')

                <!-- datatable -->
                <div class="container flex justify-center mx-auto">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 border-b border-gray-200 shadow">
                                <table class="divide-y divide-gray-300" id="generalTable">
                                    <thead class="bg-black">
                                        <tr>
                                            <th class="px-6 py-2 text-xs text-white">
                                                DOCUMENT NO.
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                BORROWER
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                AGENT
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                LOAN AMOUNT
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                BANK
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                CHEQUE NO.
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                CHEQUE AMOUNT
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
                                                2021
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
                                                99999
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
@endsection
