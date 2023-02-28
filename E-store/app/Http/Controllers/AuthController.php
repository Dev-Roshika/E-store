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
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //$credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                /*The Hash::check() function takes two arguments: 
                the first one is the plain-text password 
                provided in the request, and the second one is the 
                hashed password retrieved from the database.*/
                Auth::login($user);
                return redirect() -> route('/admin/adminDashboard');
            } else {
                return redirect()->back()->withErrors(['email' => 'Password is invalid']);
            }
        } else {
            return redirect()->back()->withErrors(['email' => 'Email is not registerd']);
        }
    }

    function logout()
    {
        session()->flush();

        Auth::logout();

        return Redirect('login');
    }
}
