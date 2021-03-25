<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class SubjectsController extends Controller
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
            'subjects' => Subjects::with('teach_id','teach_id.user_id')->get(),
        ];
        return view('admin.subjects', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'teacher' => Teachers::with('user_id')->get(),
        ];
        return view('admin.add_subject', $data);
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
            'subject_title' => 'required',
        ]);

        if ($v->fails())
        {
            return $v->getMessageBag();
        }

        Subjects::create([
            'subject_id' => $request->subject_id,
            'teach_id' => $request->teach_id,
            'subject_title' => $request->subject_title,
            'sun_day' => $request->sun_day,
            'mon_day' => $request->mon_day,
            'tue_day' => $request->tue_day,
            'wed_day' => $request->wed_day,
            'thu_day' => $request->thu_day,
            'fri_day' => $request->fri_day,
            'sat_day' => $request->sat_day,
            'on_date'=> Carbon::now($tz=null),
            'on_time'=>$request->on_time,
        ]);
        return redirect()->route('subjects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function edit(Subjects $subjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
