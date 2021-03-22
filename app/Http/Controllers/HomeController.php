<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teachers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $t = Teachers::where(['user_id'=>Auth::user()->id]);
        if ($t->count() > 0)
        {
            return redirect()->route('teacher');
        }

        if (Auth::user()->is_admin)
        {
            return redirect()->route('administrator');
        }

        // return view('home');
        return redirect()->route('sublist');
    }
}
