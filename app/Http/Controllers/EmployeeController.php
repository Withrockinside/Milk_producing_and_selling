<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::get();

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        Employee::create($request->all());

        return redirect('/employees')->with('completed', 'employee has been saved!');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            ]);
        return redirect('/employees')->with('completed', 'employee has been updated');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/employees')->with('completed', 'employee has been deleted');
    }
}
