<?php
namespace App\Http\Controllers\Doctor;

use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Hash;



class RegisterController extends Controller
{
    
      //use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('cp.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
         $this->validate($request,[
        'contact'=>'bail|required|min:1',
         'address' => 'required|string|max:255',
             'dob' => 'required|date',
        'email' => 'required|string|email|max:255|unique:admins',
         'password'=>'required|same:password_confirmation|min:1'
      ]);
        
        
      $users= new Doctor;
        $users->name=Input::get("name");
         $users->address=Input::get("address");
        $users->contact=Input::get("contact");
        $users->dob=Input::get("dob");
         $users->email=Input::get("email");
        

        $users->password=bcrypt(Input::get("password"));
       // $users->confirm=Input::get(Hash::make("confirm"));
        $users->save();
          return view('doctor.doctorlogin');
        
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
