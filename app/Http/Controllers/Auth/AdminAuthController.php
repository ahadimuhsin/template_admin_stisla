<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AdminAuthController extends Controller
{
    //
    use AuthenticatesUsers;

    //atur percobaan login hanya 3 kali per user
    protected $maxAttempts = 3;

    //atur jedanya 2 menit untuk kesempatan login selanjutnya
    protected $decayMinutes = 2;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('postLogout');
    }

    public function getLogin()
    {
        return view('auth.admin.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if(auth()->guard('admin')
            ->attempt($request->only('email', 'password')))
        {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return redirect()->intended('admin/home');
        }
        else{
            $this->incrementLoginAttempts($request);

            return redirect()
            ->back()
            ->withInput()
            ->withErrors(["Incorrect user login details"]);
        }
    }

    public function postLogout()
    {
        auth()->guard('admin')->logout();
        session()->flush();

        return redirect()->route('home');
    }
}
