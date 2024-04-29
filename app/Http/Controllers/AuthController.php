<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class AuthController extends Controller
{
    public function login(Request $request){
        $validateUser = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validateUser->fails()){
            return response()->json([
                'status'=> false,
                'errors'=> $validateUser->errors()
            ]);
        }
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // return response()->json([
            //     "status"=>true,
            //     "message"=>'login'
            // ]);
            return redirect()->route('dashboard');
        }
        return response()->json([
            'errors' =>['email' => 'The provided credentials do not match our records.']
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
