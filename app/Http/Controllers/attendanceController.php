<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        Session::flash('message', 'Attendance Submitted');
        return redirect()->route('home');
    }

    public function checkCurrentDay()
    {
        $today = Carbon::now()->toDateString();
        $userID = Auth::user()->id;
        $attendance = attendance::where('staff_id','=',$userID)->where('dateRecord','=',$today)->get();

//        dd($attendance);

        if ($attendance->isEmpty())
        {
            return 'empty';
        }
        else{
            return 'exist';
        }
    }
}
