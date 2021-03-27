<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'teacher' => Teachers::with('user_id')->get()
        ];
        return view('admin.teachers', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_teacher');
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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'username' => ['required'],
            'usercode' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'usercode' => $request->usercode,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_teacher' => true,
        ]);

        $id = User::where(['username' => $request->username])->get()[0]->id;
        Teachers::create([
            'user_id' => $id,
            'description' => $request->description
        ]);

        return redirect()->route('teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $t = Teachers::where(['id' => $id])->get()[0];
        $data = [
            'teachers' => $t,
            'username' => User::where(['id' => $t->user_id])->get()[0],
        ];
        return view('admin.edit_teacher', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id, $teacher_id)
    {
        Teachers::where(['id' => $teacher_id])->update([
            'description' => $request->description,
        ]);

        User::where(['id' => $user_id])->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "usercode" => $request->usercode,
        ]);
        return redirect()->route('teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teachers::destroy($id);
        return redirect()->route('teachers');
    }
}
