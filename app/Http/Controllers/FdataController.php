<?php

namespace App\Http\Controllers;

use App\Models\Fdata;
use app\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fdatas = Fdata::latest()->get();
        // ddd($fdatas);
        return view('fdatas.index')->with(['fdatas' => $fdatas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $student = $request->session()->get('student');
        // dd($student);


        return view('fdatas.create')->with(['student' => $student]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = request()->validate([
            'student_id' => 'required',
            'roll_no' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'post' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'fathers_name' => 'required',
            'fathers_occupation' => 'required',
            'f_mobile' => 'required',
            'address' => 'required',
            'state' => 'required',
            'distt' => 'required',
            'pincode' => 'required',
            'about_us' => '',
            'what_mn' => '',
            'why_mn' => '',
            'rel_mn' => '',


        ]);



        $fdata = new Fdata($validatedData);
        $student = Student::where('id', $fdata->student_id)->first();
        $student->form_filled = 1;
        $student->save();
        $fdata->save();



        return view('students.getpass', ['student' => $student])->with(['msg' => 'Form submited successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fdata  $fdata
     * @return \Illuminate\Http\Response
     */
    public function show(Fdata $id)
    {
        return view('fdatas.show', ['fdata' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fdata  $fdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Fdata $id)
    {
        // $fdata = Fdata::findOrFail($id)->get();

        return view('fdatas.edit', ['fdata' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fdata  $fdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fdata $fdata)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fdata  $fdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fdata $fdata)
    {
        //
    }
    public function fdatasToCsv()
    {
        $table = Fdata::all();
        $filename = "form-data.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array(
            'id',
            'roll_no',
            'first_name',
            'last_name',
            'post',
            'email',
            'dob',
            'gender',
            'mobile',
            'fathers_name',
            'fathers_occupation',
            'f_mobile',
            'address',
            'state',
            'distt',
            'pincode',
            'about_us',
            'what_mn',
            'why_mn',
            'rel_mn',
            'created_at'
        ));

        foreach ($table as $row) {
            fputcsv($handle, array(
                $row['id'],
                $row['roll_no'],
                $row['first_name'],
                $row['last_name'],
                $row['post'],
                $row['email'],
                $row['dob'],
                $row['gender'],
                $row['mobile'],
                $row['fathers_name'],
                $row['fathers_occupation'],
                $row['f_mobile'],
                $row['address'],
                $row['state'],
                $row['distt'],
                $row['pincode'],
                $row['about_us'],
                $row['what_mn'],
                $row['why_mn'],
                $row['rel_mn'],
                $row['updated_at']
            ));
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return Response::download($filename, now() . '.csv', $headers);
    }
}
