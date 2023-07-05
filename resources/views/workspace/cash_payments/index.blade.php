@extends('layouts.app')
@section('title', 'CASH PAYMENT')
@section('content')

    <!-- Modal toggle -->
    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Toggle modal
    </button>

  <!-- Main modal -->
  <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-blue-900 dark:text-white">
                        ADD PAYMENT
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                <div class="mt-2 mb-2">
                    <label class="text-sm font-bold mb-2" for="username">
                    LOAN ID:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-bold mb-2" for="username">
                    PAYMENT DATE:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>

                <div class="mb-2">
                    <label class="text-sm font-bold mb-2" for="username">
                    BORROWER NAME:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-fullpy-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-bold mb-2" for="username">
                    MATURITY DATE:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>

                <div class="mb-2">
                    <label class="text-sm font-bold mb-2" for="username">
                    DUE AMOUNT:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-bold mb-2" for="username">
                    PAYMENT TYPE:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>

                <div class="mb-2">
                    <label class="text-sm font-bold mb-2" for="username">
                    AMOUNT:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-fullpy-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-bold mb-2" for="username">
                    STATUS:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>

                <div class="mb-2">
                    <label class="text-sm font-bold mb-2" for="username">
                    TOTAL BALANCE:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-fullpy-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-bold mb-2" for="username">
                    PENALTY BALANCE:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-bold mb-2" for="username">
                    SHORT OVER:
                    <input class="shadow appearance-none border bg-gray-200 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                    </label>
                </div>


              </div>
              <!-- Modal footer -->
              <div class="flex items-center flex justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back To List</button>
                  <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
              </div>
          </div>
      </div>
  </div>

    {{-- <!-- Overlay element -->
    <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-400 bg-opacity-60"></div>

    <!-- The dialog -->
    <div id="dialog"
        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-5/6 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
        <h1 class="text-2xl font-semibold text-blue-500">ADD PAYMENT</h1>
        <div class="w-full">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                        Loan ID:
                        <input class="shadow appearance-none border bg-gray-200 rounded w-2/5 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                        Borrower Name:
                        <input class="shadow appearance-none border bg-gray-200 rounded w-2/5 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outlin" name="address" id="address" placeholder="" required>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                        Due Amount:
                        <input class="shadow appearance-none border bg-gray-200 rounded w-2/5 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="valid_id_number" id="valid_id_number" placeholder="" required>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                        Amount
                        <input class="shadow appearance-none border bg-gray-200 rounded w-2/5 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="designated_area" id="designated_area" placeholder="" required>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                        Total Balance:
                        <input class="shadow appearance-none border bg-gray-200 rounded w-2/5 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="valid_id_number" id="valid_id_number" placeholder="" required>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                        Short/Over
                        <input class="shadow appearance-none border bg-gray-200 rounded w-2/5 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="designated_area" id="designated_area" placeholder="" required>
                        </label>
                    </div>

            <div class="flex justify-end mt-6">
                <button id="close" class="mr-2 px-5 py-2 bg-white hover:bg-gray-500 text-gray-700 cursor-pointer rounded-md border-solid border-2 border-gray-600">
                    Back To List
                </button>

                <button id="close" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-600 text-white cursor-pointer rounded-md">
                    Save Changes
                </button>
            </div>
            </form>
        </div>
    </div> --}}

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h1 class="bold text-2xl text-blue-800 mb-6">Cash Payment</h1>

    <!-- Main content -->
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
        </div>
                        @include('components.input')
                        <!-- button -->
                        <div class="mt-6 mb-3 flex items-center justify-end">
                            <button class="w-40 py-3 px-4  text-center bg-indigo-600 rounded-md text-white text-sm hover:bg-indigo-500" data-bs-toggle="modal" data-bs-target="#cash" id="cash">Cash Payment</button>
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


<!-- Modal -->
<script>
    var openButton = document.getElementById('cash');
    var dialog = document.getElementById('dialog');
    var closeButton = document.getElementById('close');
    var overlay = document.getElementById('overlay');

    // show the overlay and the dialog
    openButton.addEventListener('click', function () {
        dialog.classList.remove('hidden');
        overlay.classList.remove('hidden');
    });

    // hide the overlay and the dialog
    closeButton.addEventListener('click', function () {
        dialog.classList.add('hidden');
        overlay.classList.add('hidden');
    });
</script>

@endsection

