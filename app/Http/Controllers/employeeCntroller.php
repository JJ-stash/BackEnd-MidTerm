<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeeCntroller extends Controller
{
    public function viewAll()
    {
        $employees = Employee::orderBy('created_at', 'DESC');
        $employees = $employees->get();

        return view('all-employee')->with('employees', $employees);
    }

    public function addNew(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'lastname' => $request->code,
            'birthdate' => $request->address,
            'personal_id' => $request->city,
            'salary' => $request->country
        ]);

        return redirect()->route('employees.all');
    }

    public function delete(Request $request)
    {
        Employee::where('id', $request->employee_id)->delete();

        return redirect()->route('employees.all');
    }
}