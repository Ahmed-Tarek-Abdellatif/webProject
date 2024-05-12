@extends('layouts.TA')
@section('content')
<div class="container">
    @php
        // Load the courses at the beginning
        $courses = \App\Models\Courses::all();
    @endphp

    <a href="{{ route('course.info') }}" class="add-link">
        <button class="add-button">Add Course</button>
    </a>

    <!-- Use a form to delete courses -->

    <table>
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Doctor</th>
                <th>Major</th>
                <th>Credit Hours</th>
                <th>Select</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->getAttribute('Course name') }}</td>
                <td>{{ $course->getAttribute('Instructor') }}</td>
                <td>{{ $course->getAttribute('Major') }}</td>
                <td>{{ $course->getAttribute('Credit hours') }}</td>
                <td><input type="checkbox" name="course_ids[]" value="{{ $course->id }}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
