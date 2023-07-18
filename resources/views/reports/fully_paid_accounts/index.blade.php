@extends('layouts.app')
@section('title', 'FULLY PAID ACCOUNTS')
@section('content')

    <h1 class="bold text-2xl text-blue-800 ml-4 mb-6">Fully Paid Accounts</h1>

    <!-- Main content -->
    <div class="card md bg-white">
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
                                        <th class="px-4 py-2 text-xs text-white">
                                            BORROWER
                                        </th>
                                        <th class="px-4 py-2 text-xs text-white">
                                            AMOUNT
                                        </th>
                                        <th class="px-4 py-2 text-xs text-white">
                                            OUTSTANDING BALANCE
                                        </th>
                                        <th class="px-4 py-2 text-xs text-white">
                                            RECEIVABLE
                                        </th>
                                        <th class="px-4 py-2 text-xs text-white">
                                            PAYMENT TYPE
                                        </th>
                                        <th class="px-4 py-2 text-xs text-white">
                                            PENALTY
                                        </th>
                                        <th class="px-4 py-2 text-xs text-white">
                                            PENALTY BALANCE
                                        </th>
                                        <th class="px-4 py-2 text-xs text-white">
                                            ACTION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center">
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            Andrei Kevin
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            99999
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            12345678
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            CASH
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            BANK
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            20000
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            50000
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
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
        </div>
    </div>
</div>

    @include('layouts.footer')

@endsection
