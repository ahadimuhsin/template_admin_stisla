<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Job;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /*
     * Mengirim data jobs ke halaman register
     */
    public function showRegistrationForm()
    {
        $jobs = Job::orderBy("created_at", "DESC")->get();

        return view('auth.register', compact("jobs"));
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            "name" => "required|string",
            "job_id" => "required|exists:jobs,id",
            "email" => "required|email",
            "password" => "required|min:8",
            "image" => "required|mimes:jpeg,jpg,png",
            "gender" => "required",
            "phone_number" => "required|numeric"
        ]);

        //handle the file
        if($request->hasFile("image")){
            $file = $request->file('image');

            $filename = time() . "." . $file->getClientOriginalName();

            $file->move('assets/images', $filename);

            User::create([
                "job_id" => $request->job_id,
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "image" => $filename,
                "gender" => $request->gender,
                "phone_number" => $request->phone_number
            ]);
        }
        return redirect(route("login"))->with(["success" => "Akun berhasil dibuat"]);
    }
}
