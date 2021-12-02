<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reserves = DB::table('rooms')->pluck('name');

        return view('admin.roomHome', [
            'reserves' => $reserves,
        ]);
    }

    /**
     * 新規部屋作成フォーム
     */
    public function roomForm()
    {
        return view('admin.roomForm');
    }

    /**
     * room一覧個別ページ表示
     */
    public function showRoomA()
    {
        $date = date('y-m-d');

        $reserves = DB::table('room501s')->whereDate('reserved_at', '=', $date)->pluck('reserved_time');

        return view('admin.rooms.RoomA', [
            'reserves' => $reserves,
        ]);
    }

    public function showRoomB()
    {
        $date = date('y-m-d');

        $reserves = DB::table('room502s')->whereDate('reserved_at', '=', $date)->pluck('reserved_time');

        return view('admin.rooms.RoomB', [
            'reserves' => $reserves,
        ]);
    }

    public function showRoomC()
    {
        $date = date('y-m-d');

        $reserves = DB::table('room503s')->whereDate('reserved_at', '=', $date)->pluck('reserved_time');

        return view('admin.rooms.RoomC', [
            'reserves' => $reserves,
        ]);
    }

    public function showRoomD()
    {
        $date = date('y-m-d');

        $reserves = DB::table('room504s')->whereDate('reserved_at', '=', $date)->pluck('reserved_time');

        return view('admin.rooms.RoomD', [
            'reserves' => $reserves,
        ]);
    }

    /**
     * Room新規作成
     */
    public function newRoom(Request $request) {
        $data = $request->all();

        \DB::table('rooms')->insert([
            'name' => $data['name'],
            'url' => $data['url'],
        ]);

        return redirect('admin/roomHome');
    }

}
