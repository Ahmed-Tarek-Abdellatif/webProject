@extends('layouts.TA')
@section('content')
<div class="registerstudent-container">
    <form class="registerstudent-form" method="POST" action="{{ route('register') }}">
        @csrf
        <h2>Student Info</h2>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="faculty">Faculty</label>
            <input type="text" id="faculty" name="faculty" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Register Student</button>
    </form>
</div>
@endsection
