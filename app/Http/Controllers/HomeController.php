<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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

//        $cDate = Carbon::now()->format('Y-m-d');
//        $attendance=attendance::where([
//            ['dateRecord', '=', $cDate],
//            ['staff_id', '=', Auth::user()->id]
//        ])->get();
//        $status = app('App\Http\Controllers\attendanceController')->checkCurrentDay();
//        return view('home',['data'=>$attendance,'daystatus'=>$status]);

        $selectedMonth = "12";
        $selectedData = Carbon::now()->month($selectedMonth);
        $dates = [];
        $attendance = new attendance;
        $filter = [];

        for($i=1; $i < $selectedData->daysInMonth + 1; ++$i) {
//            $dates[] = \Carbon\Carbon::createFromDate($selectedData->year, $selectedData->month, $i)->format('F-d-Y');
            $dates[] = Arr::add(['tarikh' => \Carbon\Carbon::createFromDate($selectedData->year, $selectedData->month, $i)->format('F-d-Y')], 'status', 'hadir');
        }

        $attendance=app('App\Http\Controllers\attendanceController')->getAttendancehistory($selectedMonth,$selectedData->year);

        dd($attendance);

    }

    public function test($bulan)
    {
        $today = Carbon::now()->month($bulan);
        $dates = [];

        for($i=1; $i < $today->daysInMonth + 1; ++$i) {
            $dates[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('F-d-Y');
        }

        return $dates;
    }
}
