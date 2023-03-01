<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
        //$customers = User::all();
        $customers = User::where('role', 'customer')->get();
        return view('admin.employeeManagement')->with('customers', $customers);
    }

    public function create()
    {
        return view('admin.enrollNewEmployee');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:6 | alpha_num',
            'mobile' => 'required | min:10 | max:10',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'password' => Hash::make($request->password), // Hash the password
            'role' => $request->role
        ]);

        if ($user->save()) {
            return redirect()->route('login');
        } else {
            return redirect()->route('login');
        }
    }

    public function show($id)
    {
        $customers = User::find($id);
        return view('admin.employeeeShow')->with('customers', $customers);
    }
 
    public function edit($id)
    {
        $customers = User::find($id);
        return view('admin.employeeEdit')->with('customers', $customers);
    }

    public function update(Request $request, $id)
    {
        $customers = User::find($id);
        $input = $request->all();
        $customers->update($input);
        return redirect('/admin/employee')->with('flash_message', 'New employee Updated!'); //
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/admin/employee')->with('flash_message', 'Employee deleted!!');
    }
}
