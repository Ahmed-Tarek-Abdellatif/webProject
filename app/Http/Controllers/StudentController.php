<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'id' => 'required|integer',
            'faculty' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ]);

        // Create a new student instance
        $student = new Student();
        $student->setAttribute('First name', $validatedData['first_name']);
        $student->setAttribute('Last name', $validatedData['last_name']);
        $student->setAttribute('id', $validatedData['id']);
        $student->setAttribute('Faculty', $validatedData['faculty']);
        $student->setAttribute('Email', $validatedData['email']);
        $student->setAttribute('password', $validatedData['password']);

        // Save the student instance
        $student->save();

        // Redirect to a success page
        return redirect()->route('Regstd')->with('success', 'Student registered successfully!');
    }






    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
