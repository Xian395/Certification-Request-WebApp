<?php

use App\Http\Controllers\BcertificateController;
use App\Http\Controllers\BussinessClearanceController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackingController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Auth/Login');
});
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });



//USER

// Route::get('/bcertificate', function () {
//     return Inertia::render('User/Components/Bcertificate');
// })->name('bcertificate');








Route::get('/track', [TrackingController::class, 'index'])->name('track.index');
Route::get('/track/{bcertificates}', [TrackingController::class, 'show'])->name('track.show');













//BARANGAY CERTIFICATE
Route::get('/bcertificate/create', [BcertificateController::class, 'create'])->name('bcertificate.create');

Route::post('/bcertificate', [BcertificateController::class , 'store'])->name('bcertificate.store');



//BUSSINESS CLEARANCE
Route::get('/business/create', [BussinessClearanceController::class, 'create'])->name('business.index');
Route::post('/business', [BussinessClearanceController::class, 'store'])->name('business.store');














Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/AdminAuth.php';




//ADMIN---------------------------------------------

Route::middleware('auth:admin')->group(function () {





    //BARANGAY CERTIFICATE

    Route::get('/bcertificates/{bcertificates}/edit', [BcertificateController::class, 'edit'])->name('bcertificates.edit');
    Route::put('/bcertificates/{bcertificates}', [BcertificateController::class, 'requestupdate'])->name('bcertificates.update');


    Route::get('/request', [BcertificateController::class, 'index'])->name('request.index');

    Route::delete('/bcertificates/{bcertificates}', [BcertificateController::class, 'destroy'])->name('bcertificate.destroy');

    Route::get('/request/{bcertificates}/show', [BcertificateController::class, 'show'])->name('request.show');





    //USER MANAGEMENT
    Route::get('/users', [NewUserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [NewUserController::class, 'create'])->name('users.create');
    Route::post('/users', [NewUserController::class, 'store']);




    //USER UPDATE
    Route::get('/users/{users}/edit', [NewUserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{users}', [NewUserController::class, 'update'])->name('users.update');



    //ADMIN UPDATE
    Route::get('/users/{users}/edit', [NewUserController::class, 'adminedit'])->name('users.edit');
    Route::put('/users/{users}', [NewUserController::class, 'adminupdate'])->name('users.update');



    Route::delete('/users/{users}', [NewUserController::class, 'destroy'])->name('users.destroy');


















    Route::get('/admin/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('admin.dashboard');


    //ADMIN PROFILE
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');


    Route::get('/certificate', function () {
        return Inertia::render('Admin/Components/Certificate');
    })->name('certificate');

    Route::get('/form', function () {
        return Inertia::render('Admin/Components/Form');
    })->name('form');

    Route::get('/transaction', function () {
        return Inertia::render('Admin/Components/Transaction');
    })->name('transaction');

    // Route::get('/userm', function () {
    //     return Inertia::render('Admin/Components/UserM');
    // })->name('userm');


});
