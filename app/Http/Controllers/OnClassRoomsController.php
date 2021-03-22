<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\OnClassRooms;
use App\Models\Subjects;
use App\Models\SubjectRooms;
use Illuminate\Http\Request;

class OnClassRoomsController extends Controller
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

    public function sublist() {
        $data = [
            'objects' => Subjects::with('teach_id','teach_id.user_id')->get(),
        ];
        return view('sublist', $data);
    }

    public function get_sublist($id) {
        $data = [
            'objects' => SubjectRooms::with('subject_id','teach_id','teach_id.user_id','room_id')->where(['subject_id'=>$id])->get(),
        ];
        return view('room', $data);
    }

    public function register_subjects($id)
    {
        $data = [
            'link' => url()->current(),
            'objects' => SubjectRooms::with('subject_id','teach_id','teach_id.user_id','room_id')->where(['id'=>$id])->get(),
        ];

        return view('register', $data);
    }

    public function register_to_classroom($id)
    {
        $s = SubjectRooms::where(['id'=>$id])->get()[0];
        $str_date = $s->room_date .' '.$s->room_time;
        $check_date = Carbon::createFromFormat('Y-m-d H:i:s', $str_date);
        $current_date = Carbon::now('Asia/Bangkok')->toDateTimeString();
        $time_register = Carbon::createFromFormat('Y-m-d H:i:s', $current_date);
        $num = OnClassRooms::where(['student_id' => Auth::user()->id])->count() + 1;
        $data = [
            'student_id' => Auth::user()->id,
            'room_id' => $id,
            'at_date' => $time_register,
            'at_time' => $time_register,
            'rounds' => $num,
            'is_absent' => $check_date->lt($time_register),
        ];

        OnClassRooms::create($data);
        return redirect()->route('sublist');
    }

    public function checkrooms() {
        return view('sublist');
    }

    public function subroom() {
        return view('sublist');
    }

}
