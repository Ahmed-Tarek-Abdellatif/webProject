<!--stdedit.blade.php-->
@extends('layouts.TA')

@section('content')

<h1>All Students</h1>

<table>

    <thead>

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Actions</th>

        </tr>

    </thead>

    <tbody>

        @foreach ($students as $student)

        <tr>

            <td>{{ $student->id }}</td>

            <td>{{ $student->getAttribute('First name') }} {{ $student->getAttribute('Last name') }}</td>

            <td>{{ $student->getAttribute('Email') }}</td>

            <td>

                <a href="{{ route('student.edit', $student->id) }}">Edit</a>


            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection