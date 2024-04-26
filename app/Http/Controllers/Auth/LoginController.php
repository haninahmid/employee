<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/home';

    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/home');
        }

        return view('auth.login');
    }

    protected function credentials(Request $request)
    {
        return $request->only('id_emp', 'emp_number');
    }

    protected function attemptLogin(Request $request)
    {
        $credentials = $request->only('id_emp', 'emp_number');
        $user = Employee::where('id_emp', $credentials['id_emp'])
            ->where('emp_number', $credentials['emp_number'])
            ->first();

        if ($user) {
            Auth::login($user);
            return true;
        }

        return false;
    }

    public function login(Request $request)
    {
        if ($this->attemptLogin($request)) {
            // Authentication successful
            return redirect()->intended('/home');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    protected function validateCredentials($user, $credentials)
    {
        return true; // Skip password validation
    }
    // public function getAuthPassword()
    // {
    //     return ''; // Return an empty string or any constant value
    // }

}
