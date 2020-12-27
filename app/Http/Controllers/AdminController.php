<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Fdata;

use Illuminate\Http\Request;

class AdminController extends Controller
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
    public function admin()
    {
        // $students = Student::all();
        // $fdatas = Fdata::all();

        // dd($students,$fdatas);
        // return view('admin.dashboard');
    }
    public function home()
    {


        return view('admin.dashboard')
                ->with(['totalStudent'=>Student::all()->count(),
                        'totalFdata'=>Fdata::all()->count()
                        ]);
    }
}

