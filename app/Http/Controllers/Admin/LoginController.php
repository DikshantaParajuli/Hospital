<?php
namespace App\Http\Controllers\Admin;
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
    protected $redirectTo=('/admin/admindashboard');
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
      public function showLoginForm()
    {
        return view('admin.adminlogin');
    }
     protected function guard()
    {
        return Auth::guard('admin');
    }
}
