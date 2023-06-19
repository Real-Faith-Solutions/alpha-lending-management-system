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

// Route::get('/', function () {
//     return view('welcome');
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


    Route::prefix('user-management')->group(function () {
        // lab result status
        Route::get('user-lists', [RegisteredUserController::class, 'index'])->name('user-management.user-lists.index');
        Route::put('user-lists/{user}/active', [UserController::class, 'setAsActive'])->name('user-management.user-lists.setAsActive');
        Route::put('user-lists/{user}/inactive', [UserController::class, 'setAsInactive'])->name('user-management.user-lists.setAsInactive');
        Route::get('role-lists', [RoleController::class, 'index'])->name('user-management.role-lists.index');

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