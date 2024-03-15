<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function add()
    {
        return view('employees.add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required',
            'type' => 'required',
        ]);

        if (!$request->salary && (!$request->hsalary || !$request->hours)) {
            return back()->with('error', 'Either salary or both hourly rate and hours must be provided.');
        }

        $addEmployee = Employee::add($request);

        if ($addEmployee) {
            return redirect()->route('employees.index')->with('success', 'employee created successfully!');
        } else {
            return back()->with('error', 'Something went wrong. Please try after sometime.');
        }
    }
}
