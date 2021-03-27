<?php

namespace App\Http\Controllers;

use App\Models\ClassRooms;
use App\Models\SubjectRooms;
use App\Models\Subjects;
use App\Models\Teachers;
use App\Models\OnClassRooms;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class SubjectRoomsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'subject_room' => SubjectRooms::with(
                'subject_id',
                'teach_id',
                'teach_id.user_id',
                'room_id'
            )->get(),
        ];
        return view('admin.subrooms', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'subject_id' => Subjects::all(),
            'teach_id' => Teachers::with('user_id')->get(),
            'room_id' => ClassRooms::all(),
        ];
        return view('admin.add_subroom', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'subject_id' => 'required',
            'teach_id' => 'required',
            'room_id' => 'required',
            'room_time' => 'required',
        ]);

        if ($v->fails()) {
            return redirect()->to('subroom/add')->withErrors($v);
        }

        SubjectRooms::create([
            'subject_id' => $request->subject_id,
            'teach_id' => $request->teach_id,
            'room_id' => $request->room_id,
            'sun_day' => $request->sun_day,
            'mon_day' => $request->mon_day,
            'tue_day' => $request->tue_day,
            'wed_day' => $request->wed_day,
            'thu_day' => $request->thu_day,
            'fri_day' => $request->fri_day,
            'sat_day' => $request->sat_day,
            'room_date' => Carbon::now(),
            'room_time' => $request->room_time,
        ]);

        return redirect()->route('subroom');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubjectRooms  $subjectRooms
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = OnClassRooms::with(
            'student_id',
            'room_id',
            'room_id.subject_id',
            'room_id.teach_id.user_id'
            )->where(['room_id' => $id])->get();

        $data = [
            'room_id' => $id,
            'rooms' => $obj
        ];
        return view('room_detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubjectRooms  $subjectRooms
     * @return \Illuminate\Http\Response
     */
    public function edit(SubjectRooms $subjectRooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubjectRooms  $subjectRooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubjectRooms $subjectRooms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubjectRooms  $subjectRooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OnClassRooms::destroy($id);
        return redirect()->route('subroom');
    }
}
