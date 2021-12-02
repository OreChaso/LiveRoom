<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


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


/**
 * ログインルート
 */
Auth::routes();

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class,'showLoginForm'])->name('login');

/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:user'], function() {
  Route::get('/', [HomeController::class,'index'])->name('home');
  Route::get('logout', [HomeController::class,'logout'])->name('logout');

  /**
   * 予約リスト(auth)
   */
  Route::get('rooms/RoomA', [Controller::class, 'reserveListRoomA'])->name('reserveListRoomA');
  Route::get('rooms/RoomB', [Controller::class, 'reserveListRoomB'])->name('reserveListRoomB');
  Route::get('rooms/RoomC', [Controller::class, 'reserveListRoomC'])->name('reserveListRoomC');
  Route::get('rooms/RoomD', [Controller::class, 'reserveListRoomD'])->name('reserveListRoomD');

  /**
   * 予約フォーム(auth)
   */
  Route::post('rooms/RoomA',[Controller::class, 'createReserveRoomA'])->name('createReserveRoomA');
  Route::post('rooms/RoomB',[Controller::class, 'createReserveRoomB'])->name('createReserveRoomB');
  Route::post('rooms/RoomC',[Controller::class, 'createReserveRoomC'])->name('createReserveRoomC');
  Route::post('rooms/RoomD',[Controller::class, 'createReserveRoomD'])->name('createReserveRoomD');
});

/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
  Route::get('login', [Admin\LoginController::class,'showLoginForm'])->name('admin.showLogin');
  Route::post('login', [Admin\LoginController::class,'login'])->name('admin.login');
});

/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
  Route::get('roomHome', [Admin\HomeController::class, 'index'])->name('admin.home');

  Route::get('roomForm', [Admin\HomeController::class, 'roomForm'])->name('roomForm');

  /**
   * Room作成(admin)
   */
  Route::post('/',[Admin\HomeController::class, 'newRoom'])->name('newRoom');

  /**
   * room一覧個別ページ表示(admin)
   */
  Route::get('rooms/RoomA', [Admin\HomeController::class, 'showRoomA'])->name('adminShowRoomA');
  Route::get('rooms/RoomB', [Admin\HomeController::class, 'showRoomB'])->name('adminShowRoomB');
  Route::get('rooms/RoomC', [Admin\HomeController::class, 'showRoomC'])->name('adminShowRoomC');
  Route::get('rooms/RoomD', [Admin\HomeController::class, 'showRoomD'])->name('adminShowRoomD');

  Route::post('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');

});


