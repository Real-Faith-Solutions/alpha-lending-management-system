<?php
use Illuminate\Support\Facades\Route;
use App\Helpers\Helpers;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AnalysisRequestController;
use App\Http\Controllers\ChemController;
use App\Http\Controllers\CreateRawDataFileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LabAcceptanceController;
use App\Http\Controllers\LabApprovalController;
use App\Http\Controllers\LabResultStatusController;
use App\Http\Controllers\MicroController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PhysController;
use App\Http\Controllers\QuerySearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\MasterFileController;
use App\Http\Controllers\CreditAssessmentController;


// Route::get('master_file', function () {
//     return view('master_file');
// });


Route::get('403', function () {
    $user = Auth::user();

    if ($user->status == 1) {
        return redirect()->route('login');
    }

    return view('forbidden.status');
})->middleware('auth');


Route::middleware('auth', 'status')->group(function () {

    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [DashboardController::class , 'getAllData']);

    Route::prefix('rights-management')->group(function () {
        // lab result status
        Route::get('user-lists', [RegisteredUserController::class, 'index'])->name('rights-management.user-lists.index');
        Route::put('user-lists/{user}/active', [UserController::class, 'setAsActive'])->name('rights-management.user-lists.setAsActive');
        Route::put('user-lists/{user}/inactive', [UserController::class, 'setAsInactive'])->name('rights-management.user-lists.setAsInactive');
        Route::get('role-lists', [RoleController::class, 'index'])->name('rights-management.role-lists.index');

    });

    Route::prefix('master_file')->group(function () {
       
        Route::get('agent_list', [CreditAssessmentController::class, 'index'])->name('master_file.agent_list.index');
        Route::get('borrowers_list', [CreditAssessmentController::class, 'credit_application'])->name('master_file.borrowers_list.credit_application');
        Route::get('collector_list', [CreditAssessmentController::class, 'collection'])->name('master_file.Collector_list.collection');
        Route::get('credit_assessment', [CreditAssessmentController::class, 'table'])->name('master_file.credit_assessment.table');

    
    });

    Route::prefix('workspace')->group(function () {
        // workspace
        Route::get('payments_schedule', [WorkspaceController::class, 'payments_schedule'])->name('workspace.payments_schedule.index');
        Route::get('cash_payments', [WorkspaceController::class, 'cash_payments'])->name('workspace.cash_payments.index');
        Route::get('cheque_payment', [WorkspaceController::class, 'cheque_payment'])->name('workspace.cheque_payment.index');

    });

    Route::prefix('funding')->group(function () {
        // funding
        Route::get('print_contract', [FundingController::class, 'print_contract'])->name('funding.print_contract.index');
        Route::get('print_voucher', [FundingController::class, 'print_voucher'])->name('funding.print_voucher.index');

    });

    Route::prefix('reports')->group(function () {
        // reports
        Route::get('agents_commission', [ReportsController::class, 'agents_commission'])->name('reports.agents_commission.index');
        Route::get('sales_reports', [ReportsController::class, 'sales_reports'])->name('reports.sales_reports.index');
        Route::get('fully_paid_accounts', [ReportsController::class, 'fully_paid_accounts'])->name('reports.fully_paid_accounts.index');
        Route::get('penalty_history', [ReportsController::class, 'penalty_history'])->name('reports.penalty_history.index');
        Route::get('collection_itinerary_report', [ReportsController::class, 'collection_itinerary_report'])->name('reports.collection_itinerary_report.index');
        Route::get('total_amortization', [ReportsController::class, 'total_amortization'])->name('reports.total_amortization.index');
        Route::get('total_actual_payments', [ReportsController::class, 'total_actual_payments'])->name('reports.total_actual_payments.index');
        Route::get('collection_efficiency', [ReportsController::class, 'collection_efficiency'])->name('reports.collection_efficiency.index');
    });

    Route::prefix('master_file')->group(function () {
        // master file
        Route::get('borrower_list', [MasterFileController::class, 'borrower_list'])->name('master_file.borrower_list.index');
        Route::get('agent_list', [MasterFileController::class, 'agent_list'])->name('master_file.agent_list.index');

    });






















});




















Route::middleware('guest')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth', 'status')->group(function () {

    Route::get('register', [RoleController::class, 'roleInRegister'])->name('register');

    // Route::get('register', [RegisteredUserController::class, 'create'])
    //             ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');


});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout')->middleware('auth');
