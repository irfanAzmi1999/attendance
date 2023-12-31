<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $cDate = Carbon::now()->format('Y-m-d');
        $attendance=attendance::where([
            ['dateRecord', '=', $cDate],
            ['staff_id', '=', Auth::user()->id]
        ])->get();
        $status = app('App\Http\Controllers\attendanceController')->checkCurrentDay();
        return view('home',['data'=>$attendance,'daystatus'=>$status]);
    }
}
