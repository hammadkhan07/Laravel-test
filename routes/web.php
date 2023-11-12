<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsignmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // url to return data of all consignments
    Route::get('/dashboard', [ConsignmentController::class, 'index'])->name('dashboard');
    // url for form redirection
    Route::get('/dashboard/add-consignment', function () {
        return view('add-consignment');
    })->name('add.consignment');
    // url to create new consignment
    Route::post('/dashboard/create/consignment', [ConsignmentController::class, 'create'])->name('create.cons');

    Route::get('/dashboard/create/pdf', [ConsignmentController::class, 'create_pdf'])->name('make_pdf');
});
