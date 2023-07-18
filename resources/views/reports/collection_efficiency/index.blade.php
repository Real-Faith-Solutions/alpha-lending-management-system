@extends('layouts.app')
@section('title', 'COLLECTION EFFICIENCY')
@section('content')


    <h1 class="bold text-2xl text-blue-800 mb-6">Collection Effciciency</h1>

    <!-- Main content -->
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
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
                </div>
            </div>

                @include('layouts.footer')
@endsection
