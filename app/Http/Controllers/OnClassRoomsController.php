<?php

namespace App\Http\Controllers;

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
            'objects' => SubjectRooms::with('subject_id','teach_id','teach_id.user_id','room_id')->where(['id'=>$id])->get(),
        ];
        return view('room', $data);
    }

    public function checkrooms() {
        return view('sublist');
    }

    public function subroom() {
        return view('sublist');
    }

}
