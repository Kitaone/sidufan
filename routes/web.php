<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DashboardController,
    PertunjukanController,
};

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
    return view('welcome');
});
Route::get('portal/login', [AuthController::class, 'indexRender'])->name('login');
Route::post('portal/auth-login', [AuthController::class, 'loginHandle'])->name('auth-login');
Route::group(['prefix' => 'portal', 'middleware' => ['auth'], 'as' => 'portal'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/wahana', [WahanaController::class, 'index'])->name('wahana-list');
    Route::get('/wahana/detail/{id}', [WahanaController::class, 'detail'])->name('wahana-detail');
    Route::get('/wahana/create', [WahanaController::class, 'create'])->name('wahana-create');
    Route::post('/wahana/store', [WahanaController::class, 'store'])->name('wahana-store');
    Route::get('/wahana/edit', [WahanaController::class, 'edit'])->name('wahana-edit');
    Route::post('/wahana/update', [WahanaController::class, 'update'])->name('wahana-update');
    Route::post('/wahana/remove', [WahanaController::class, 'remove'])->name('wahana-remove');

    Route::get('/pertunjukan', [PertunjukanController::class, 'index'])->name('pertunjukan-list');
    Route::get('/pertunjukan/detail/{id}', [PertunjukanController::class, 'detail'])->name('pertunjukan-detail');
    Route::get('/pertunjukan/create', [PertunjukanController::class, 'create'])->name('pertunjukan-create');
    Route::post('/pertunjukan/store', [PertunjukanController::class, 'store'])->name('pertunjukan-store');
    Route::get('/pertunjukan/edit', [PertunjukanController::class, 'edit'])->name('pertunjukan-edit');
    Route::post('/pertunjukan/update', [PertunjukanController::class, 'update'])->name('pertunjukan-update');
    Route::post('/pertunjukan/remove', [PertunjukanController::class, 'remove'])->name('pertunjukan-remove');


});
