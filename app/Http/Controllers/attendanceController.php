<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class attendanceController extends Controller
{
    public function submitAttendance(Request $request)
    {
        $userid = Auth::user()->id;

        $attendance = new attendance;
        $attendance->staff_id = $userid;
        $attendance->latitude = $request->input('latitude');
        $attendance->longitude = $request->input('longitude');
        $attendance->dateRecord = $request->input('currentTime');
        $attendance->save();

        return redirect()->route('home');
    }

//    public function getTodayHistory()
//    {
//        $cDate = Carbon::now()->format('Y-m-d');
//        $attendance = attendance::where('dateRecord','=',$cDate);
//
//        return view('home',['data'=>$attendance]);
//    }

}
