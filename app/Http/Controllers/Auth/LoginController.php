<?php

namespace App\Http\Controllers\Auth;

use App\Models\Student;
use App\Models\TA;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('login'); // Assuming 'auth.login' is the path to your login view
    }

    public function infoshow()
    {
        // Check if a student is authenticated
        if (Auth::guard('students')->check()) {
            // Get the authenticated student's ID
            $studentId = Auth::guard('students')->user()->id;

            // Retrieve the authenticated student's data from the database
            $student = Student::find($studentId);

            // Pass the student's data to the view
            return view('main', compact('student'));
        } else {
            // Student is not authenticated, handle accordingly
            // For example, redirect to login page
            return redirect()->route('login');
        }
    }

    public function TAinfoshow()
    {
        // Check if a TA is authenticated
        if (Auth::guard('tas')->check()) {
            // Get the authenticated TA's ID
            $taId = Auth::guard('tas')->user()->id;

            // Retrieve the authenticated TA's data from the database
            $ta = TA::find($taId);

            // Pass the TA's data to the view
            return view('TAmain', compact('ta'));
        } else {
            // TA is not authenticated, handle accordingly
            // For example, redirect to login page
            return redirect()->route('login');
        }
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password', 'role');
        // Authentication failed, redirect back to login with error message

        // Check if the role is student or TA
        if ($credentials['role'] === 'student') {
            if (Auth::guard('students')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
                // Authentication passed, redirect to student dashboard or wherever you want
                return redirect('main');
            }
        } elseif ($credentials['role'] === 'ta') {
            if (Auth::guard('tas')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
                // Authentication passed, redirect to TA dashboard or wherever you want
                return redirect()->route('TAmain');
            }
        }

        // Authentication failed, redirect back to login with error message
        return redirect()->back()->withInput($request->only('email', 'role'))->withErrors(['error' => 'Invalid credentials']);
    }



    public function logout()
    {
        // Logout the authenticated user regardless of their role
        Auth::logout();

        // Redirect the user to the login page
        return redirect()->route('login');
    }
}
