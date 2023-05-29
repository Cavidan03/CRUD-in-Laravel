<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    
    public function index()
    {
          $students=Students::all();     
           return view('students.index')->with('students',$students);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Students::create($input);
        return redirect('students')->with('flash_message', 'Student Addedd!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::find($id);
        return view('students.show')->with('students', $student);
    }

   
    public function edit(string $id)
    {
        
        $student = Students::find($id);
        return view('students.edit')->with('students', $student);
    }

    
    public function update(Request $request, string $id)
    {
        $student = Students::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('students')->with('flash_message', 'student Updated!'); 
    }

   
    public function destroy(string $id)
    {
        Students::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!'); 
    }
}
