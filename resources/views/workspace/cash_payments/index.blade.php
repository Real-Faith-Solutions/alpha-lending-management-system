@extends('layouts.app')
@section('title', 'CASH PAYMENT')
@section('content')

        <!-- Main modal -->
        <div id="defaultModal1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Add Payment
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal1">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->

                    <form action="#">
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>
                                <label for="loan_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Loan ID</label>
                                <input type="text" name="loan_id" id="loan_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Date</label>
                                <input type="text" name="payment_date" id="payment_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Payment Date" required="">
                            </div>
                            <div>
                                <label for="borrower_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Borrower Name</label>
                                <input type="text" name="borrower_name" id="borrower_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                            </div>
                            <div>
                                <label for="maturity_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maturity Date</label>
                                <input type="text" name="maturity_date" id="maturity_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Maturity Date" required="">
                            </div>
                            <div>
                                <label for="due_amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Due Amount</label>
                                <input type="number" name="due_amount" id="due_amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                            </div>
                            <div>
                                <div>
                                    <label for="payment_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Type</label>
                                    <select id="payment_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected="">Please Select</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                                <input type="number" name="amount" id="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                            </div>
                            <div>
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <select id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Please Select</option>
                                    <option value="TV">Paid</option>
                                    <option value="PC">Unpaid</option>
                                </select>
                            </div>
                            <div>
                                <label for="total_balance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Balance</label>
                                <input type="number" name="total_balance" id="total_balance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                            </div>
                            <div>
                                <label for="penalty_balance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalty Balance</label>
                                <input type="number" name="penalty_balance" id="penalty_balance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                            </div>
                            <div>
                                <label for="short_over" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Short Over</label>
                                <input type="number" name="short_over" id="short_over" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                            </div>
                        </div>

                        <div class="flex items-center flex justify-end">
                            <button class="mr-2 px-5 py-2 bg-white hover:bg-gray-500 text-gray-700 cursor-pointer rounded-md border-solid border-2 border-gray-600" data-modal-toggle="defaultModal1">
                                Back To List
                            </button>

                            <button class="px-5 py-2 bg-indigo-500 hover:bg-indigo-600 text-white cursor-pointer rounded-md">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-7">
            <h1 class="bold text-2xl text-blue-800 mb-6">Cash Payment</h1>

    <!-- Main content -->
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
        </div>
                        @include('components.input')

                        <div class="flex justify-end m-5">
                            <button id="defaultModalButton1" data-modal-toggle="defaultModal1" class="w-40 py-3 px-4  text-center bg-indigo-600 rounded-md text-white text-sm hover:bg-indigo-500" type="button">
                            Cash Payment
                            </button>
                        </div>

                <!-- datatable -->
                <div class="container flex justify-center mx-auto">
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
                                                TOTAL BALANCE
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                PAYMENT
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                SHORT OVER
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                PENALTY
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                PENALTY BALANCE
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                LOAN STATUS
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
                                                2021-1-12
                                            </td>
                                            <td class="px-6 py-4">
                                                99999
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900">
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
            </div>
        </div>

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-sm dark:border-gray-700 mt-14">
            <footer>
                <h1 class="bold text-2xl text-center text-blue-800">Loan Management System 2023</h1>
          </footer>
        </div>

    <!-- Modal Script -->
    <script>

        document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById('defaultModalButton1').click();
        });

        // var openButton = document.getElementById('cash');
        // var dialog = document.getElementById('dialog');
        // var closeButton = document.getElementById('close');
        // var overlay = document.getElementById('overlay');

        // // show the overlay and the dialog
        // openButton.addEventListener('click', function () {
        //     dialog.classList.remove('hidden');
        //     overlay.classList.remove('hidden');
        // });

        // // hide the overlay and the dialog
        // closeButton.addEventListener('click', function () {
        //     dialog.classList.add('hidden');
        //     overlay.classList.add('hidden');
        // });
    </script>

@endsection

