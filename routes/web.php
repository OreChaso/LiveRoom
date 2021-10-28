<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Counter;

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

Route::get('/roomHome', [Controller::class, 'rooms'])->name('rooms');
Route::get('/about', [Controller::class, 'showAbout'])->name('showAbout');

/**
 * 予約リスト
 */
Route::get('/rooms/RoomA', [Controller::class, 'reserveListRoomA'])->name('reserveListRoomA');
Route::get('/rooms/RoomB', [Controller::class, 'reserveListRoomB'])->name('reserveListRoomB');
Route::get('/rooms/RoomC', [Controller::class, 'reserveListRoomC'])->name('reserveListRoomC');
Route::get('/rooms/RoomD', [Controller::class, 'reserveListRoomD'])->name('reserveListRoomD');

/**
 * 予約フォーム
 */
Route::post('/rooms/RoomA',[Controller::class, 'createReserveRoomA'])->name('createReserveRoomA');
Route::post('/rooms/RoomB',[Controller::class, 'createReserveRoomB'])->name('createReserveRoomB');
Route::post('/rooms/RoomC',[Controller::class, 'createReserveRoomC'])->name('createReserveRoomC');
Route::post('/rooms/RoomD',[Controller::class, 'createReserveRoomD'])->name('createReserveRoomD');

/**
 * ログインルート
 */
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


