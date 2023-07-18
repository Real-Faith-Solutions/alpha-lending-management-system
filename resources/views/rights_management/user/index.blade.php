@extends('layouts.app')
@section('title', 'USER LIST')
@section('content')

    <h1 class="bold text-2xl text-blue-800 ml-6 mb-6">User List</h1>

    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
                 <a class="px-5 py-2 bg-blue-500 hover:bg-blue-700 text-white cursor-pointer rounded-md" href="{{ route('register') }}">ADD NEW USER</a>
        </div>

        <!-- datatable -->
        <div class="container mx-auto overflow-x-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="p-4 border-b border-gray-200 shadow">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full divide-y divide-gray-300" id="generalTable">
                                <thead class="bg-black">
                                    <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        NAME
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        EMAIL
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ROLE
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        STATUS
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ACTION
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="whitespace-nowrape">
                                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                            {{ $user->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $user->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->role }}
                                        </td>
                                        <td class="px-6 py-4">

                                            @if ($user->status == '0')
                                                <span class="mr-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800">
                                                    Inactive
                                                </span>
                                            @else
                                                <span
                                                    class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                                    Active
                                                </span>
                                            @endif

                                        </td>
                                        {{-- <td class="px-6 py-4 text-left">
                                            @if ($user->status == '0')
                                                <form action="{{ route('rights-management.user-lists.setAsActive', $user) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="font-medium text-blue-600 hover:underline">
                                                        Set as Active
                                                    </button>
                                                </form>

                                            @else
                                                <form action="{{ route('rights-management.user-lists.setAsInactive', $user) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="font-medium text-blue-600 hover:underline">
                                                        Set as Inactive
                                                    </button>
                                                </form>
                                            @endif
                                        </td> --}}

                                        <td class="px-6 py-4 text-left">
                                            <a class="px-5 py-2 bg-rose-500 hover:bg-rose-700 text-white cursor-pointer rounded-md" href="#">Reject</a>
                                            {{-- @if ($user->status == 1) <button class="btn btn-danger btn-sm btn-block">Reject</button>
                                                @else <button class="btn btn-primary btn-sm btn-block">Approve</button>
                                            @endif --}}
                                            </a>
                                        </td>

                                        <td class="px-6 py-4 text-left">
                                            <a class="px-5 py-2 bg-blue-500 hover:bg-blue-700 text-white cursor-pointer rounded-md" href="#">Delete</a>
                                            {{-- @if ($user->status == 1) <button class="btn btn-primary btn-sm btn-block">Approve</button>
                                                @else <button class="btn btn-primary btn-sm btn-block">Approve</button>
                                            @endif --}}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')


@endsection


