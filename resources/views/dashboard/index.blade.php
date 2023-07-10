@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

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

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4">
            <h1 class="bold text-2xl text-blue-800 mt-4 mb-14">Status and Assessment</h1>
                <div class="card grid grid-cols-2 md:grid-cols-2 mt-6">

                    <canvas id="delinquentStatus" style="width:100%;max-width:600px"></canvas>

                    <canvas id="chartCreditAssessment" style="width:100%;max-width:600px"></canvas>
                </div>
        </div>

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4">
            <h1 class="bold text-2xl text-blue-800 mb-14">CER Updates</h1>
                <div class="card grid grid-cols-3 mt-16">

                    <div class="bold text-2xl text-gray-800">
                        <h1>Total Actual Payments</h1>
                    </div>

                    <div class="bold text-2xl text-gray-800">
                        <h1>Total Actual Amortization</h1>
                    </div>

                    <div class="bold text-2xl text-gray-800">
                        <h1>Total</h1>
                    </div>

                </div>
        </div>

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4">
            <h1 class="bold text-2xl text-blue-800 mt-4 mb-14">Status and Assessment</h1>
                <div class="card grid grid-cols-2 md:grid-cols-2 mt-6">

                    <canvas id="loanStatus" style="width:100%;max-width:600px;"></canvas>

                    <canvas id="chartCourseType" style="width:100%;max-width:600px"></canvas>
                </div>
        </div>

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4">
            <h1 class="bold text-2xl text-blue-800 mt-4 mb-4">Late Payments</h1>
                <div class="card grid grid-cols-2 md:grid-cols-1 mt-6 flex justify-center">
                    <canvas id="chartLatePayments" style="width:100%;max-width:600px"></canvas>
                </div>
        </div>

  <script>

    const xValues = ["Total", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const yValues = ['', 20, 23, 40, 20, 23, 40, 20, 23, 40, 50, 63, 70, 80];
    const barColors = ["", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff"];

    new Chart("chartCreditAssessment", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "Credit Assessments Overview"
        }
      }
    });

    const xValues1 = ["Total", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const yValues1 = ['','20000', '23000', '40000', '20000', '23000', '40000', '20000', '23000', '40000', '50000', '63000', '70000', '80000'];
    const barColors1 = ["", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff"];

    new Chart("chartCourseType", {
      type: "bar",
      data: {
        labels: xValues1,
        datasets: [{
          backgroundColor: barColors1,
          data: yValues1
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "Receivables Earnings Overview"
        }
      }
    });

    const xValues2 = ["Total", "Jan", "", "Mar", "", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const yValues2 = ['', 20, 23, 40, 20, 23, 40, 20, 23, 40, 50, 63, 70, 80];
    const barColors2 = ["", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff", "#1e90ff"];

    new Chart("chartLatePayments", {
      type: "bar",
      data: {
        labels: xValues2,
        datasets: [{
          backgroundColor: barColors2,
          data: yValues2
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "Most Late Payments"
        }
      }
    });

    const xValues3 = ["Past Due", "Delinquent", "Fully Paid"];
    const yValues3 = [38, 21, 15];
    const barColors3 = [
    "#76ff7a",
    "#cd853f",
    "#1e90ff",
    ];

    new Chart("delinquentStatus", {
    type: "pie",
    data: {
        labels: xValues3,
        datasets: [{
        backgroundColor: barColors3,
        data: yValues3
        }]
    },
    options: {
        title: {
        display: true,
        text: "Delinquent account status"
        }
    }
    });

    const xValues4 = ["Borrowers", "Approved", "Rejected"];
    const yValues4 = [30, 20, 50];
    const barColors4 = [
    "#76ff7a",
    "#cd853f",
    "#1e90ff",
    ];

    new Chart("loanStatus", {
    type: "pie",
    data: {
        labels: xValues4,
        datasets: [{
        backgroundColor: barColors4,
        data: yValues4
        }]
    },
    options: {
        title: {
        display: true,
        text: "Loan Status"
        }
    }
    });

    </script>

@include('layouts.footer')

@endsection





