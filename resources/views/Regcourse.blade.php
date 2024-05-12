@extends('layouts.TA')
@section('content')

<div class="Courseinfo-container">
    <form class="Courseinfo-form" method="POST" action="{{ route('course.create') }}">
    @csrf
        <h2>Course info</h2>

        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" id="course_name" name="course_name" required />
            <label for="course_code">Course Code</label>
            <input type="text" id="course_code" name="course_code" required />
            <label for="doctor">Doctor</label>
            <input type="text" id="doctor" name="doctor" required />
            <label for="major">Major</label>
            <input type="text" id="major" name="major" required />
            <label for="credit_hours">Credit Hours</label>
            <input type="text" id="credit_hours" name="credit_hours" required />
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection