<?php

namespace App\Http\Controllers;

use App\Models\ClassRooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassRoomsController extends Controller
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
            'class_room' => ClassRooms::all(),
        ];
        return view('admin.rooms', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_rooms');
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
            'room_title' => 'required',
            'room_code' => 'required',
            'room_limits' => 'required',
        ]);

        if ($v->fails())
        {
            return $v->getMessageBag();
        }

        ClassRooms::create([
            'room_title' => $request->room_title,
            'room_code' => $request->room_code,
            'room_limits' => $request->room_limits,
        ]);

        return redirect()->route('rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassRooms  $classRooms
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'rooms' => ClassRooms::where(['id' => $id])->get()[0],
        ];
        return view('admin.edit_room', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassRooms  $classRooms
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassRooms $classRooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassRooms  $classRooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ClassRooms::where(['id' => $id])->update([
            'room_title' => $request->room_title,
            'room_code' => $request->room_code,
            'room_limits' => $request->room_limits,
        ]);

        return redirect()->route('rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassRooms  $classRooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClassRooms::destroy($id);
        return redirect()->route('rooms');
    }
}
