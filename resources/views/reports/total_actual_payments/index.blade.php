@extends('layouts.app')
@section('title', 'TOTAL ACTUAL PAYMENTS')
@section('content')

    <!-- Main content -->
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
        </div>
                    @include('components.input')

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
                        <table class="divide-y divide-gray-300" id="generalTable">
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
                </section>
<!-- /.content -->

@endsection
