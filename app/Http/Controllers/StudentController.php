<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
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
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::all();
        return view('student.create',compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // We will Validate
        $data = $request->validate([
            'name' => 'required',
            'mobile' => 'required:10 | numeric:10',
            'address' => 'required',
            'guardian' => 'required',
            'faculty_id' => 'required',
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->mobile = $request->mobile;
        $student->address = $request->address;
        $student->guardian = $request->guardian;
        $student->faculty_id = $request->faculty_id;

        if($request->hasFile('photo')){
            $fileName = $request->photo;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('student', $newName);
            $student->photo = 'student/' .$newName;
        }

        $student->save();

        $request->session()->flash('message','Student created successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculties = Faculty::all();
        $student = Student::find($id);
        return view('student.edit',compact('faculties','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // We will Validate
        $data = $request->validate([
            'name' => 'required',
            'mobile' => 'required:10 | numeric:10',
            'address' => 'required',
            'guardian' => 'required',
            'faculty_id' => 'required',
        ]);

        $student = Student::find($id);
        $student->name = $request->name;
        $student->mobile = $request->mobile;
        $student->address = $request->address;
        $student->guardian = $request->guardian;
        $student->faculty_id = $request->faculty_id;

        if($request->hasFile('photo')){
            $fileName = $request->photo;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('student', $newName);
            $student->photo = 'student/' .$newName;
        }
        
        $student->update();

        $request->session()->flash('message','Student updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back();
    }
}
