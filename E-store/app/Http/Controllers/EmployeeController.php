<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$employees = User::all();
        $employees = User::where('role', 'employee')->get();
        return view('admin.employeeManagement')->with('employees', $employees);
    }

    public function create()
    {
        return view('admin.enrollNewEmployee');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $request->merge(['role' => 'employee']);
        User::create($input);
        return redirect('/admin/employee')->with('flash_message', 'New employee Added!'); //
    }

    public function show($id)
    {
        $employees = User::find($id);
        return view('admin.employeeeShow')->with('employees', $employees);
    }

    public function edit($id)
    {
        $employees = User::find($id);
        return view('admin.employeeEdit')->with('employees', $employees);
    }

    public function update(Request $request, $id)
    {
        $employees = User::find($id);
        $input = $request->all();
        $employees->update($input);
        return redirect('/admin/employee')->with('flash_message', 'New employee Updated!'); //
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/admin/employee')->with('flash_message', 'Employee deleted!!');
    }
}
