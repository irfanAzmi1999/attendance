<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Response;

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

    public function fetchDate()
    {
        $month = [];

        for ($m=1; $m<=12; $m++) {
            $month[] = date('F', mktime(0,0,0,$m, 1, date('Y')));
        }

        return view('history',['data'=>$month]);


    }

    public function getDateMonth(Request $request)
    {
        $selectedMonth = $request->input('selectedMonth');
        $selectedData = Carbon::now()->month($selectedMonth);
        $dates = [];
        $attendance = new attendance;
        $filter = [];

        for($i=1; $i < $selectedData->daysInMonth + 1; ++$i) {
//            $dates[] = \Carbon\Carbon::createFromDate($selectedData->year, $selectedData->month, $i)->format('F-d-Y');
            $dates[] = Arr::add(['tarikh' => \Carbon\Carbon::createFromDate($selectedData->year, $selectedData->month, $i)->format('F-d-Y')], 'status', 'hadir');
            $attendance=app('App\Http\Controllers\attendanceController')->getAttendancehistory($dates[$i-1]);

//            dd($attendance[0]->id);
            if (isset($attendance[$i-1]))
            {
//                dd($dates[$i-1]['tarikh']);
                if($attendance[$i-1]->created_at->format('F-d-Y')==$dates[$i-1]['tarikh'])
                {

                    $filter[$i-1] = Arr::add(['tarikh'=>$dates[$i-1]['tarikh']],'status','hadir');
                }
                else{
                    $filter[$i-1]['tarikh'] = $dates[$i-1]['tarikh'];
                    $filter[$i-1]['status'] = 'tak hadir';
                }
            }
            else{
                $filter[$i-1]['tarikh'] = $dates[$i-1]['tarikh'];
                $filter[$i-1]['status'] = 'tak hadir';
            }


        }

        return response()->json(array('data'=> $filter), 200);
//        return response()->json(['data'=> $filter, 200]);

    }

    public function getAttendancehistory($dates)
    {
//        dd($dates['tarikh']);
        $parsedate = new carbon($dates['tarikh']);
        $userid = Auth::user()->id;
        $attendance = attendance::where('staff_id','=',$userid)->whereYear('created_at','=',$parsedate->year)->whereMonth('created_at','=',$parsedate->month)->get();

        return $attendance;

    }
}
