<?php
namespace App\Http\Controllers\Doctor;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
     use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo=('/doctor/doctordashboard');
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:doctor')->except('logout');
    }
      public function showLoginForm()
    {
        return view('doctor.doctorlogin');
    }
     protected function guard()
    {
        return Auth::guard('doctor');
    }
}
