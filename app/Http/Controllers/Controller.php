<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reserve;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function rooms()
    {
        return view('auth.roomHome');
    }

    public function showAbout()
    {
        return view('auth.about');
    }

    /**
     * 予約機能
     */

    public function createReserveRoomA(Request $request) {

        //新規予約を取得
        $data = $request->all();

        \DB::table('room501s')->insert([
            'reserved_at' => $data['reserved_at'],
            'reserved_time' => $data['reserved_time'],
        ]);

        return redirect('/rooms/RoomA');
    }

    public function createReserveRoomB(Request $request) {

        //新規予約を取得
        $data = $request->all();

        \DB::table('room502s')->insert([
            'reserved_at' => $data['reserved_at'],
            'reserved_time' => $data['reserved_time'],
        ]);

        return redirect(route('/rooms/RoomB'));
    }

    public function createReserveRoomC(Request $request) {

        //新規予約を取得
        $data = $request->all();

        \DB::table('room503s')->insert([
            'reserved_at' => $data['reserved_at'],
            'reserved_time' => $data['reserved_time'],
        ]);

        return redirect(route('/rooms/RoomC'));
    }

    public function createReserveRoomD(Request $request) {

        //新規予約を取得
        $data = $request->all();

        \DB::table('room504s')->insert([
            'reserved_at' => $data['reserved_at'],
            'reserved_time' => $data['reserved_time'],
        ]);

        return redirect(route('/rooms/RoomD'));
    }

    /**
     * 予約をリスト表示
     */

    public function reserveListRoomA() {
        $date = date('y-m-d');

        $reserves = DB::table('room501s')->whereDate('reserved_at', '=', $date)->pluck('reserved_time');

        return view('auth.rooms.RoomA', [
            'reserves' => $reserves,
        ]);
    }

    public function reserveListRoomB() {
        $date = date('y-m-d');

        $reserves = DB::table('room502s')->whereDate('reserved_at', '=', $date)->pluck('reserved_time');

        return view('auth.rooms.RoomB', [
            'reserves' => $reserves,
        ]);
    }

    public function reserveListRoomC() {
        $date = date('y-m-d');

        $reserves = DB::table('room503s')->whereDate('reserved_at', '=', $date)->pluck('reserved_time');

        return view('auth.rooms.RoomC', [
            'reserves' => $reserves,
        ]);
    }

    public function reserveListRoomD() {
        $date = date('y-m-d');

        $reserves = DB::table('room504s')->whereDate('reserved_at', '=', $date)->pluck('reserved_time');

        return view('auth.rooms.RoomD', [
            'reserves' => $reserves,
        ]);
    }

}

