<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
           <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('#') }}" class="ml-6" alt="ALPHA LENDING PH"/>
            </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ml-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="#">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none"> {{ Auth::user()->name }}

                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">{{ Auth::user()->email }}

                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="{{ route('profile.edit') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Profile</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Acvitiy Log</a>
                  </li>
                  <li>
                    <a href="#" data-modal-target="logout-modal" data-modal-toggle="logout-modal"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Log Out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
</nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 mt-6" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
               <a href="{{ url('/') }}"
                        class="@php if (url()->current() === url('/')): @endphp @php endif; @endphp ml-3 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     Dashboard
               </a>
            </li>

            <li>
               <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="master-file" data-collapse-toggle="master-file">
                     <span class="flex-1 ml-3 text-left whitespace-nowrap">Master File</span>
               </button>
               <ul id="master-file" class="hidden py-2 space-y-2">
                     <li>
                        <a href="{{ route('funding.print_voucher.index') }}"

                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray700">Agent List</a>
                     </li>
                     <li>
                        <a href="{{ route('funding.print_voucher.index') }}"-
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Borrower List</a>
                     </li>
               </ul>
            </li>

            <li>
              <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="funding" data-collapse-toggle="funding">

                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Funding</span>

              </button>
              <ul id="funding" class="hidden py-2 space-y-2">
                <li>
                    <a href="{{ route('funding.print_voucher.index') }}"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Agent List</a>
                </li>

                <li>
                    <a href="{{ route('funding.print_contract.index') }}"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Borrower List</a>

              </ul>
           </li>

           <li>
              <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="workspace" data-collapse-toggle="workspace">

                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Workspace</span>

              </button>
              <ul id="workspace" class="hidden py-2 space-y-2">
                    <li>
                       <a href="{{ route('workspace.payments_schedule.index') }}"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Daily Payment</a>
                    </li>
                    <li>
                       <a href="{{ route('workspace.cash_payments.index') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Cash Payment</a>
                    </li>
                    <li>
                       <a href="{{ route('workspace.cheque_payment.index') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Cheque Payment</a>
                    </li>
              </ul>
           </li>

           <li>
              <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="report" data-collapse-toggle="report">

                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Reports</span>

              </button>
              <ul id="report" class="hidden py-2 space-y-2">
                    <li>
                       <a href="{{ route('reports.agents_commission.index') }}"
                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Agents Commisions</a>
                    </li>
                    <li>
                       <a href="{{ route('reports.sales_reports.index') }}"
                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sales Report</a>
                    </li>
                    <li>
                       <a href="{{ route('reports.fully_paid_accounts.index') }}"
                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Fully Paid Accounts</a>
                    </li>
                    <li>
                        <a href="{{ route('reports.penalty_history.index') }}"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Penalty History</a>
                     </li>
                     <li>
                        <a href="{{ route('reports.collection_itinerary_report.index') }}"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Colelction Itinerary Report</a>
                     </li>
                     <li>
                        <a href="{{ route('reports.total_amortization.index') }}"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Total Amortization</a>
                     </li>
                     <li>
                        <a href="{{ route('reports.total_actual_payments.index') }}"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Total Actual Payments</a>
                     </li>
                     <li>
                        <a href="{{ route('reports.collection_efficiency.index') }}"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Collection Efficiency</a>
                     </li>
              </ul>
           </li>

           <li>
              <button type="button" id="dropdownNavbarLink" data-dropdown-toggle="rights1"
              class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="rights-management" data-collapse-toggle="rights-management">

                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Rights Management</span>

              </button>
              <ul id="rights-management" class="hidden py-2 space-y-2">
                    <li>
                       <a href="{{ route('rights-management.user-lists.index') }}"
                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">User List</a>
                    </li>
                    <li>
                       <a href="{{ route('rights-management.role-lists.index') }}"
                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Roles</a>
                    </li>
              </ul>
           </li>
     </div>
  </aside>
