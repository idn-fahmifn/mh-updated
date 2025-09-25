<?php

use App\Http\Controllers\AvailablePageController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\FloorDashController;
use App\Http\Controllers\LantaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TenantDashController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () { return view('home'); })->name('home');
Route::get('/home', function () { return view('welcome'); })->name('welcome');

// Route untuk halaman available space
Route::get('/available-space', [AvailablePageController::class, 'index'])->name('available-space');

// Resource route untuk lantai
Route::resource('lantai', LantaiController::class);

// Route custom untuk mendapatkan ruangan berdasarkan lantai
Route::get('/lantai/{floorId}/ruangan', [LantaiController::class, 'getRoomsByFloor']);
Route::get('/ruang/{roomId}', [LantaiController::class, 'show'])->name('ruang.show');
Route::get('/rooms/export-available-pdf', [FloorDashController::class, 'exportAvailableRoomsPdf'])
->name('rooms.export-pdf');
Route::get('/rooms/export-excel', [App\Http\Controllers\FloorDashController::class, 'exportExcel'])->name('rooms.export-excel');
Route::post('/rooms/import-excel', [App\Http\Controllers\FloorDashController::class, 'importExcel'])->name('rooms.import-excel');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware(['auth', 'superAdmin'])->group(function () {
    Route::resource('users', UserDashController::class);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('rooms', FloorDashController::class);
    Route::resource('tenants', TenantDashController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Routes Lantai
Route::prefix('floor')->group(function(){


    Route::get('/1', [FloorController::class, 'semibasement'])->name('floor.semibasement'); //basemant
    Route::get('/2', [FloorController::class, 'basement'])->name('floor.basement'); //sb
    Route::get('/3', [FloorController::class, 'ground'])->name('floor.ground'); //groound
    Route::get('/4', [FloorController::class, 'second'])->name('floor.second'); //2
    Route::get('/5', [FloorController::class, 'third'])->name('floor.third'); //3
    Route::get('/6', [FloorController::class, 'fourth'])->name('floor.fourth');//4
    Route::get('/7', [FloorController::class, 'fifth'])->name('floor.fifth'); //5
    Route::get('/8', [FloorController::class, 'sixth'])->name('floor.sixth');  //6
    Route::get('/9', [FloorController::class, 'seventh'])->name('floor.seventh'); //7
    Route::get('/10', [FloorController::class, 'eighth'])->name('floor.eighth'); //8
    Route::get('/11', [FloorController::class, 'ninth'])->name('floor.ninth'); //9
    Route::get('/12', [FloorController::class, 'tenth'])->name('floor.tenth'); //10
    Route::get('/13', [FloorController::class, 'eleventh'])->name('floor.eleventh'); //11
    Route::get('/14', [FloorController::class, 'twelfth'])->name('floor.twelfth'); //12
    Route::get('/15', [FloorController::class, 'thritiet'])->name('floor.thritiet'); //12a
    Route::get('/16', [FloorController::class, 'fourtieth'])->name('floor.fourtieth'); //14
});



require __DIR__.'/auth.php';

