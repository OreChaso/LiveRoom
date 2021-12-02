<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reserves = DB::table('rooms')->pluck('name');

        return view('auth.roomHome', [
            'reserves' => $reserves,
        ]);
    }

    public function showLoginForm()
    {
        return view('auth.login');  //変更
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();  //変更
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/login');  //変更
    }
}
