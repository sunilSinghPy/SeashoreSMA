<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        // $students = $students->toArray();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
    public function varifyStudent(Request $request)
    {
        //ddd($request->all());

        $validatedData = $request->validate([
            'roll_no' => 'required|max:10|min:5',
            'fname'    => 'required|max:15|min:3',
        ]);
        // ddd($validatedData);
        $student = Student::where(function ($query) use ($validatedData) {
            $query->where('roll_no', '=', $validatedData['roll_no'])
                ->where('name', 'like', '%' . $validatedData['fname'] . '%');
        })
            ->first();

        if ($student) {
            $request->session()->put('student', $student);
            return redirect()->route('fdatas.create');
        }
        return redirect()->back()->withErrors(['msg' => 'invalid Roll No. or Name!']);
    }
}
