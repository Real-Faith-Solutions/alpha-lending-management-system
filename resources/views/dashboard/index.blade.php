@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

  <div class="p-4 sm:ml-64">
     <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <h1 class="bold text-2xl text-blue-800 mb-6">Dashboard</h1>
        <div class="mb-3 grid sm:grid-cols-1 sm:gap-2 lg:grid-cols-3 lg:gap-4">
            <div class="card bg-cyan-500">
                <h1 class="bold text-2xl text-white">14</h1>
                <p class="mt-4 text-xl text-white">Total Borrowers</p>
            </div>
            <div class="card bg-green-500">
                <h1 class="bold text-2xl text-white">24</h1>
                <p class="mt-4 text-xl text-white">Total Loan Approved</p>
            </div>
            <div class="card bg-rose-500">
                <h1 class="bold text-2xl text-white">15</h1>
                <p class="mt-4 text-xl text-white">Total Loan Rejected</p>
            </div>
            <div class="card bg-rose-500">
                <h1 class="bold text-2xl text-white">23</h1>
                <p class="mt-4 text-xl text-white">Total Overdue Payments</p>
            </div>
            <div class="card bg-yellow-500">
                <h1 class="bold text-2xl text-white">4</h1>
                <p class="mt-4 text-xl text-white">Total Receivables</p>
            </div>
            <div class="card bg-cyan-500">
                <h1 class="bold text-2xl text-white">4</h1>
                <p class="mt-4 text-xl text-white">Total Credit Assessments</p>
            </div>
            <div class="card bg-cyan-500">
                <h1 class="bold text-2xl text-white">5</h1>
                <p class="mt-4 text-xl text-white">Total Matured Loans</p>
            </div>
            <div class="card bg-green-500">
                <h1 class="bold text-2xl text-white">3</h1>
                <p class="mt-4 text-xl text-white">Total Pending Assessment</p>
            </div>
            <div class="card bg-yellow-500">
                <h1 class="bold text-2xl text-white">50</h1>
                <p class="mt-4 text-xl text-white">Total Users</p>
            </div>
        </div>
     </div>
  </div>
