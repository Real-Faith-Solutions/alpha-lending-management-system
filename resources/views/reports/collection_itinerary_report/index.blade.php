@extends('layouts.app')
@section('title', 'AGENT COMMISSION REPORT')
@section('content')

    <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <h1 class="bold text-2xl text-blue-800 mb-6">Colelction Itinerary Report</h1>

    <!-- Main content -->
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
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
                                                LOAN ID
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                BORROWER NAME
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                AGENT NAME
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                LOAN AMOUNT
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                MATURITY
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                STATUS
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                ACTION
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
                                                <div
                                                    class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                                    PAID
                                                </div>
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
