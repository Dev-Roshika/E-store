<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $role = Auth::user()->role;

            session()->put('isLogged', true);
            session()->put('role', $role);
            session()->put('name', session()->has('name') ? session()->get('name') : Auth::user()->name);


            switch ($role) {
                case 'admin':
                    return redirect()->route('admin.adminDashboard');
                    break;
                case 'customer':
                    return redirect()->route('customer.customerDashboard');
                    break;
                case 'employee':
                    return redirect()->route('employee.employeeDashboard');
                default:
                    return redirect()->route('login');
                    break;
            }
        } else {
            session()->put('isLogged', false);
            session()->put('loginError', 'Invalid email or password');

            error_log('here');
            return redirect()->route('login');
        }
    }


    function logout()
    {
        session()->flush();

        Auth::logout();

        return Redirect('login');
    }
}
