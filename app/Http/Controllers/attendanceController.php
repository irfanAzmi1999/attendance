<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $attendance=self::getAttendancehistory($selectedMonth,$selectedData->year);

        for($i=1; $i < $selectedData->daysInMonth + 1; ++$i) {
//            $dates[] = \Carbon\Carbon::createFromDate($selectedData->year, $selectedData->month, $i)->format('F-d-Y');
            $dates[] = Arr::add(['tarikh' => \Carbon\Carbon::createFromDate($selectedData->year, $selectedData->month, $i)->format('F-d-Y')], 'status', 'hadir');

//            foreach($attendance as $datadate)
//            {
//                if($datadate == $dates[$i-1])
//                {
//
//                }
//            }
        }
                //STEP NEXT: FOR EACH KAN DATES DAN ASSIGN KAN STATUS IKUT ATTENDANCES

        foreach ($dates as $key=>$data) {
            if($data->tarikh == $attendance)
            {
                $data->status="hadir";
            }
        }


        return response()->json(array('data'=> $dates), 200);
//        return response()->json(['data'=> $filter, 200]);

    }

    public function getAttendancehistory($month,$year)
    {
//        dd($dates['tarikh']);
//        $parsedate = new carbon($dates['tarikh']);
        $userid = Auth::user()->id;
        $attendance = attendance::where('staff_id','=',$userid)->whereYear('created_at','=',$year)->whereMonth('created_at','=',$month)->get();
        $test=[];
        $oldTarikh = null;
        $filter = [];
        $index = 0;

        $tarikh = DB::table('attendances')
            ->select('dateRecord')
            ->where('staff_id',$userid)
            ->distinct()
            ->get();

        foreach($tarikh as $key=>$item)
        {
            $t = attendance::where('staff_id','=',$userid)->where('dateRecord','=',$item->dateRecord)->first();
            $tt = DB::table('attendances')->where('staff_id','=',$userid)
                ->where('dateRecord','=',$item->dateRecord)
                ->orderBy('created_at', 'desc')
                ->first();
            $clockout = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$tt->created_at)->format('H:i:s');

            $filter[$key] = array('tarikh'=>$t->dateRecord,'clock_in'=>$t->created_at->format('H:i:s'),'clock_out'=>$clockout);

        }


        return $filter;

    }

}
