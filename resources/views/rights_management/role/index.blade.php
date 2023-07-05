@extends('layouts.app')
@section('title', 'ROLE LIST')
@section('content')

    <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
                 <a class="px-5 py-2 bg-blue-500 hover:bg-blue-700 text-white cursor-pointer rounded-md" id="addRoles">ADD NEW ROLE</a>
        </div>

     <!-- Overlay element -->
     <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-400 bg-opacity-60"></div>

     {{-- <!-- The dialog -->
     <div id="dialog"
         class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2/5 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
         <h1 class="text-2xl font-semibold text-blue-500">ADD ROLES</h1>
         <div class="w-full">
             <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
             <div class="mb-4">
                 <label class="block text-sm font-bold mb-2" for="username">
                   Add Roles
                 <input class="shadow appearance-none border rounded w-4/5 py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" placeholder="" required>
                 </label>
             </div>

                 <div class="flex justify-between mt-2">
                     <input class="" type="checkbox" id="flexCheckChecked" />
                     <label class="" for="flexCheckChecked">
                         Dashboard
                     </label>
                     <br />
                     <input class="" type="checkbox" id="flexCheckChecked1" />
                     <label class="" for="flexCheckChecked1">
                         Rights Management
                     </label>
                     <br />
                     <input class="form-check-input" type="checkbox" id="flexCheckChecked2" />
                     <label class="form-check-label" for="flexCheckChecked2">
                         Master List
                     </label>
                 </div>

                 <div class="flex justify-end mt-2">
                     <ol>
                         <ul>
                             <input class="form-check-input" type="checkbox" id="flexCheckChecked2.1" />
                             <label class="form-check-label" for="flexCheckChecked2.1">
                                 Add
                             </label>
                         </ul>

                         <ul>
                             <input class="form-check-input" type="checkbox" id="flexCheckChecked2.2" />
                             <label class="form-check-label" for="flexCheckChecked2.2">
                                 Revise
                             </label>
                         </ul>

                         <ul>
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2.3" />
                             <label class="form-check-label" for="flexCheckChecked2.3">
                                 Delete
                             </label>
                         </ul>

                         <ul>
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2.4" />
                             <label class="form-check-label" for="flexCheckChecked2.4">
                                 Upload
                             </label>
                         </ul>

                         <ul>
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2.5" />
                             <label class="form-check-label" for="flexCheckChecked2.5">
                                 Approved/<br>
                                 Disapproved
                             </label>
                         </ul>
                     </ol>
                 </div>

                 <div class="">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" />
                     <label class="form-check-label" for="flexCheckChecked3">
                         Reports
                     </label>
                     <br />

                     <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" />
                     <label class="form-check-label" for="flexCheckChecked4">
                         Maintenance
                     </label>
                     <br />
                 </div>
            </div>


             <div class="flex justify-end mt-2">
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

        <div class="container mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="p-4 border-b border-gray-200 shadow">
                        <!-- <table> -->
                        <table id="generalTable" class="w-full border-solid border-2 border-black-900">
                            <thead class="bg-black">
                                <tr>
                                    <th scope="row" class="px-6 py-2 text-xs text-white">
                                        NAME
                                    </th>
                                    <th scope="row" class="px-6 py-2 text-xs text-white">
                                        ROLES
                                    </th>
                                    <th scope="row" class="px-6 py-2 text-xs text-white">
                                        EDIT
                                    </th>
                                    <th scope="row" class="px-6 py-2 text-xs text-white">
                                        DELETE
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="bg-gray-50 text-center">
                                        <td class="px-6 py-4 font-medium text-gray-900">
                                           ADMIN
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900">
                                         -----
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

                                        <td class="px-6 py-4 font-medium text-gray-900">
                                            <a href="#" class="inline-block text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                        </td>
                                </tr>

                                <tr class="p-4 bg-gray-50 text-center">
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                       APPROVER
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                     -----
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

                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        <a href="#" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>

                                <tr class="p-4 bg-gray-50 text-center">
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                       CASE MANAGER
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                     -----
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

                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        <a href="#" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
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

<!-- Javascript code -->
<script>
    var openButton = document.getElementById('addRoles');
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
