<?php

use App\Http\Controllers\dynamicPage;
use App\Http\Controllers\trafficChartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrafficDataController;
use App\Http\Controllers\testController;
use App\Http\Controllers\tableController;

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
    return redirect()->route('table.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('users/import/', [UsersController::class, 'import']);
Route::resource('/users', UserController::class);
Route::resource('/traffics', TrafficDataController::class);
Route::post('/import', [TrafficDataController::class, 'import'])->name('traffic.import');
Route::get('/traffics/index',[TrafficDataController::class, 'import'])->name('traffic.index');
Route::get('/trafficChart', [trafficChartController::class, 'index'])->name('traffic2.index');
Route::get('/dynamicViews', [dynamicPage::class, 'index'])->name('dynamic.index');
Route::post('/dynamicViews/create',[dynamicPage::class, 'create'])->name('dynamic.create');
Route::get('/dynamicViews/index2', [dynamicPage::class, 'index2'])->name('dynamic.index2'); //debug

//Route::get('analytic/index',[AnalyticController::class, 'analytic'])->name('analytic.index'); // page analytic
//Route::get('test', [testController::class, 'test'])->name('test');

Route::resource('/table', tableController::class)->middleware('auth'); //Dynamic Table
Route::post('/table/create', [tableController::class, 'create2'])->name('table.create')->middleware('auth');
Route::get('/table/edit', [tableController::class], 'edit')->name('table.edit');