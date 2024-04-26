<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $employee = Auth::user();
        // $employee = Employee::
        return view('home',compact('employee'));
    }
}
