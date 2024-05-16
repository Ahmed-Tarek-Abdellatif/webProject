<!-- applyedit.blade.php -->
@extends('layouts.TA')

@section('content')
<h1>Edit Student</h1>
<form action="{{ route('students.update', $student['id']) }}" method="POST">
    @csrf
    <!-- Add form fields for editing student data here -->
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="{{$student->getAttribute('First name')}}">
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="{{  $student->getAttribute('Last name') }}">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $student->Email }}">
    <!-- Add more fields as needed -->
    <button type="submit">Save Changes</button>
</form>
@endsection