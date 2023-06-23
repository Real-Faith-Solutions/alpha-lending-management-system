@extends('layouts.app')
@section('title', 'Role Lists')
@section('content')

    {{-- <div class="div-grid">
            <table class="table">
                <thead class="thead">
                    <tr class="tr">
                        <th scope="col" class="th">
                            Role Tables
                    </th></tr>
                    <tr class="tr">
                        <th scope="col" class="th">
                            Role
                        </th>
                        <th scope="col" class="th">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr class="tr">
                        <th scope="row" class="th">
                            {{ $role->name }}
                        </th>

                        <td class="td">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div> --}}

    {{-- <div class="">
        <table class="w-full text-sm text-left text-gray-500 border-solid">
            <thead class="w-full font-medium uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                <tr class="w-full bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $role->name }}
                    </th>

                    <td class="td">
                        <a href="#" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div> --}}

<div class="card mb-3 bg-white">
    <div class="mb-3 flex justify-between">
        <label>@yield('title')</label>
             <a class="px-5 py-2 bg-blue-500 hover:bg-blue-700 text-white cursor-pointer rounded-md" data-bs-toggle="modal" data-bs-target="#addRole">ADD NEW ROLE</a>
    </div>

    <div class="relative overflow-x-auto sm:rounded-lg">
        <table class="w-full text-left text-sm text-gray-500">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                <tr>
                    {{-- <th scope="col" class="px-6 py-3">
                        Name
                    </th> --}}
                    <th scope="col" class="px-6 py-3">
                        Roles
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">
                        Archive
                    </th> --}}
                </tr>

            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $role->name }}
                    </th>

                    <td class="td">
                        <a href="#" class="px-5 py-2 bg-blue-500 hover:bg-blue-700 text-white cursor-pointer rounded-md">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
