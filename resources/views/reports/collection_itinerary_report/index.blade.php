@extends('layouts.app')
@section('title', 'AGENT COMMISSION REPORT')
@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <!-- Main content -->
    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
        </div>
                        <div class="grid grid-cols-3 gap-1 text-left">
                            <div class="col-span-1 h-20 bg-black-100">
                                <label for="basic-url" class="form-label">Select periodic</label>
                                <div class="input-group mb-3">
                                  <select class="form-control" id="inputGroupSelect02">
                                    <option selected>------</option>
                                      <option value="1">Daily</option>
                                      <option value="2">Weekly</option>
                                      <option value="3">Monthly</option>
                                      <option value="4">Semi Annually 1</option>
                                      <option value="5">Semi Annually 2</option>
                                      <option value="6">Annually</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-1 h-20 bg-black-100">
                                <label for="basic-url" class="form-label">From</label>
                                      <div class="input-group mb-3">
                                        <input type="date" class="form-control"></input>
                                      </div>
                            </div>
                            <div class="col-span-1 h-20 bg-black-100">
                                <label for="basic-url" class="form-label">To</label>
                                      <div class="input-group mb-3">
                                        <input type="date" class="form-control"></input>
                                      </div>
                            </div>
                        </div>
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
                                                LOAN RECEIVABLE
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                TOTAL COMMISSION
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
                                                <div class="text-sm text-gray-900">
                                                    Jon doe
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">jhondoe@example.com</div>
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

                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2
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
                                                <div class="text-sm text-gray-900">andreikevincasoco@gmail.com</div>
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

                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                3
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
                                                <div class="text-sm text-gray-900">andreikevincasoco@gmail.com</div>
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

                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                4
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
                                                <div class="text-sm text-gray-900">jhondoe@example.com</div>
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

                                            <tr class="text-center">
                                                <td class="px-6 py-4 text-sm text-gray-900">
                                                    5
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                        Andrei Kevin
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">jhondoe@example.com</div>
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
                                                    <div class="text-sm text-gray-900">jhondoe@example.com</div>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    {{-- </div>
                </div> --}}
                    {{-- <td>
                        past due
                    </td> --}}

                {{-- @else --}}

                    {{-- <td>
                        paid
                    </td> --}}

                  {{-- @endif --}}
                    </tr>
                {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

</section>
<!-- /.content -->

<script>
    $(document).ready(function () {
        $('#generalTable').DataTable();

    });
</script>

@endsection
