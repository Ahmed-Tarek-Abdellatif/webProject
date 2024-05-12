<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{

    public function showCourseInfoForm()
    {
        return view('Regcourse');
    }

    public function createCourse(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'course_name' => 'required|string|max:255',
            'course_code' => 'required|string|max:255',
            'doctor' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'credit_hours' => 'required|integer'
        ]);

        // Create a new course instance
        $course = new Courses();
        $course->setAttribute('Course name', $validatedData['course_name']);
        $course->setAttribute('id', $validatedData['course_code']);
        $course->setAttribute('Insturctors', $validatedData['doctor']);
        $course->setAttribute('Major', $validatedData['major']);
        $course->setAttribute('Credit hours', $validatedData['credit_hours']);
        $course->save();

        // Redirect to a success page or any other page as needed
        return redirect()->route('Regcourse')->with('success', 'Course created successfully!');
    }

    public function index()
    {
        $courses = Courses::all();
        return view('TAcourses', compact('courses'));
    }

    public function destroy(Request $request)
    {
        $courseIds = $request->input('course_ids');

        // Check if $courseIds is not null and is countable
        if ($courseIds && is_array($courseIds)) {
            Courses::whereIn('id', $courseIds)->delete();
            return redirect()->back()->with('success', 'Selected courses deleted successfully!');
        } else {
            return redirect()->back()->withErrors('No courses selected for deletion!');
        }
    }




    /**
     * Display a listing of the resource.
     */

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
}
