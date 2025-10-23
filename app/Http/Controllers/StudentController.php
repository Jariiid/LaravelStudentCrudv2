<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(10); // show 10 per page

        return view('home', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:50',
            'mname' => 'nullable|string|max:50',
            'lname' => 'required|string|max:50',
            'student_number' => 'required|digits:10|unique:students,student_number',
            'email' => 'required|email|max:100|unique:students,email',
        ]);


        Student::create($request->all());

        return redirect('/')->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
    $validated = $request->validate([
        'fname' => 'required|string|max:50',
        'mname' => 'nullable|string|max:50',
        'lname' => 'required|string|max:50',
        'student_number' => 'required|digits:10|unique:students,student_number,' . $student->id,
        'email' => 'required|email|max:100|unique:students,email,' . $student->id,
    ]);


    $student->update($validated);

    return redirect('/')->with('success', 'Student updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {

        $student->delete();
    
        return redirect()->back()->with('success', 'Student deleted!');
    }
}
