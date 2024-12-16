<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegistration() {
        return view('masterreg');
    }   

    public function submitRegistration(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd($user);  
        return redirect()->route('login');
    }  

    public function showLogin() {
        return view('masterlogin');
    }

    public function submitLogin(Request $request) {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('table');
        } else {
            return redirect()->back()->with('failed', 'Your Email or Password is Incorrect'); 
        }
    }
}
