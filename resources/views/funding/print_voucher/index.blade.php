@extends('layouts.app')
@section('title', 'PRINT VOUCHER')
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
                                                LOAN INTEREST
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                RECEIVABLE
                                            </th>
                                            <th class="px-6 py-2 text-xs text-white">
                                                TOTAL DEDUCTION
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
                                                <div class="text-sm text-gray-900">jhondoe@example.com</div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021-1-12
                                            </td>
                                            <td class="px-6 py-4">
                                                99999
                                            </td>
                                            <td class="px-6 py-4">
                                                99999
                                            </td>
                                        </tr>

                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2
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
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021
                                            </td>
                                            <td class="px-6 py-4">
                                                99999
                                            </td>
                                            <td class="px-6 py-4">
                                                99999
                                            </td>
                                        </tr>

                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                3
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
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021
                                            </td>
                                            <td class="px-6 py-4">
                                                99999
                                            </td>
                                            <td class="px-6 py-4">
                                                99999
                                            </td>
                                        </tr>

                                        <tr class="text-center">
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                4
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
                                            <td class="px-6 py-4 text-sm text-gray-900">
                                                2021
                                            </td>
                                            <td class="px-6 py-4">
                                                99999
                                            </td>
                                            <td class="px-6 py-4">
                                                99999
                                            </td>

                                            <tr class="text-center">
                                                <td class="px-6 py-4 text-sm text-gray-900">
                                                    5
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
                                                <td class="px-6 py-4 text-sm text-gray-900">
                                                    2021
                                                </td>
                                                <td class="px-6 py-4">
                                                    99999
                                                </td>
                                                <td class="px-6 py-4">
                                                    99999
                                                </td>
                                                </td>
                                            </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
