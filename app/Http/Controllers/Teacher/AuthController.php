<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
        //$this->middleware('guest', ['except' => 'logout']);
    }

    public function login()
    {
     return view('TeacherAdmin.Auth.login')  ;
    }

    public function attemp(Request $request)
    {

        if(Auth::guard('teachers')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
    
            return redirect()
                ->intended(route('TeacherHome.index'))
                ->with('status','You are Logged in as Admin!');
        }  
    
        //Authentication failed...
        return redirect()->back()->with('error', 'your email or password is wrong');
    }


}