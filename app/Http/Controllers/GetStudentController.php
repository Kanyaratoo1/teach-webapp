<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class GetStudentController extends Controller
{
    public function LogIn($username, $passwd)
    {
        $u = User::where(['username' => $username])->get();
        return $u;
    }

    public function GetCheckIn($username)
    {
        $u = User::where(['username' => $username])->get()[0]->id;
        $obj = \App\Models\OnClassRooms::with(
            'student_id',
            'room_id',
            'room_id.subject_id',
            'room_id.teach_id.user_id'
        )->where(['student_id' => $u])->get();

        return $obj;
    }
}
