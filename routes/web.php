<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportExportController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// >>> DIR FOR AUTHENTICATION
require __DIR__.'/auth.php';

// >>> TESTING
Route::get('/', [WelcomeController::class, 'Testing'])->name('Testing');

// >>> PERUBAHAN SKEMA
Route::get('/map', [WelcomeController::class, 'index'])->name('index');

// >>> WELCOME DASHBOARD
Route::get('/oldlanding', [WelcomeController::class, 'LandingPage'])->name('LandingPage');

// >>> FOR HARDWARE DETAIL
Route::get('/hardware/{id}', [HardwareController::class, 'HardwareDetailData'])->name('HardwareDetailData');
Route::get('/hardwaretable/{id}', [HardwareController::class, 'HardwareDetailTable'])->name('HardwareDetailTable');
Route::get('/hardwaregraph/{id}', [HardwareController::class, 'HardwareDetailGraph'])->name('HardwareDetailGraph');
Route::get('/hardwarecctv/{id}', [HardwareController::class, 'HardwareDetailCCTV'])->name('HardwareDetailCCTV');

Route::post('/hardwaredaterange/{id}', [HardwareController::class, 'SelectDataFromDateRange'])->name('SelectDataFromDateRange');
Route::post('/hardwaregraphrange/{id}', [HardwareController::class, 'SelectGraphFromDateRange'])->name('SelectGraphFromDateRange');
// Route::post('/hardwaredaterange/{id}')

// >>> FOR HOME
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/neracaair', [HomeController::class, 'neracaair'])->name('neracaair');

Route::get('/dataposhidrologi', [HomeController::class, 'dataposhidrologi'])->name('dataposhidrologi');
Route::get('/editpos/{id}', [HomeController::class, 'editpos'])->name('editpos');
Route::post('/changepos/{id}', [HomeController::class, 'changepos'])->name('changepos');
// Route::post('/changepos/{id}', [HomeController::class, 'changepos'])->name('changepos');
Route::get('/deletepos/{id}', [HomeController::class, 'deletepos'])->name('deletepos');

Route::get('/tambahpos', [HomeController::class, 'tambahpos'])->name('tambahpos');
Route::post('/addnewpos', [HomeController::class, 'addnewpos'])->name('addnewpos');

Route::post('/editrating', [HomeController::class, 'editrating'])->name('editrating');

// >>> FOR IMPORT EXCEl DATA
Route::post('/importdata', [ImportExportController::class, 'import'])->name('import');

// >>> FOR EXPORT EXCEl DATA
Route::post('/exportdata/{id}', [ImportExportController::class, 'export'])->name('export');

Route::get('/cctv', function () {
    return view('cctv');
});

