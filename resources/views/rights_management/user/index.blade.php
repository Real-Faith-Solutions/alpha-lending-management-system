@extends('layouts.app')
@section('title', 'User List')
@section('content')

    <div class="card mb-3 bg-white">
        <div class="mb-3 flex justify-between">
            <label>@yield('title')</label>
                 <a class="px-5 py-2 bg-blue-500 hover:bg-blue-700 text-white cursor-pointer rounded-md" href="{{ route('register') }}">ADD NEW USER</a>
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg border-solid border-2 border-sky-500">
            <table class="w-full text-left text-sm text-gray-500 ml-auto">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            E-mail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b bg-white">
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
                            <td class="px-6 py-4 text-left">

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
                            </td>

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

@endsection

{{--
<!-- /.content -->
<script>
$(document).ready(function(){
    $('.delete_form').on('submit'), function(){
        if(confirm("Are you sure you want to delete it?")){
            return true;
        }else{
            return false;
        }

});
</script>
@endsection --}}

