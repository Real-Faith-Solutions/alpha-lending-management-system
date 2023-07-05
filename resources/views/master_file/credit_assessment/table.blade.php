@extends('layouts.app')
@section('title', 'agent list')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800 text-5xl subpixel-antialiased">Credit Assessment</h1>
        </div>

    <div class="card bg-white">
        @include('components.filter')
    </div>
    <div class="card bg-white relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="card bg-white relative overflow-x-auto shadow-md sm:rounded-lg">
        <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800 text-1xl">Credit Assessment Data Table</h1>
        </div>


        <!-- button -->
        <div class="mt-6 mb-3 flex items-start justify-start">
            <button class="w-40 py-3 px-4  text-center bg-indigo-600 rounded-md text-white text-sm hover:bg-indigo-500"
                data-bs-toggle="modal" data-bs-target="#addCollector"><i class="fa fa-plus"></i> Add </button>
        </div>

        @include('components.export')
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Client Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Client Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contact Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Form Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Emmanuel Mojares
                    </th>
                    <td class="px-6 py-4">
                        NPC line kaliwa rainbow village bagumbong caloocan city
                    </td>
                    <td class="px-6 py-4">
                        09618237778
                    </td>
                    <td class="px-6 py-4">
                        009999
                    </td>                   
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
