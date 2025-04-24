<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmpController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function show()
    {
        // dd('Hello from EmpController');
        
        $allEmployees = employee::all();
        return view('employee', compact('allEmployees'));
    }
}
