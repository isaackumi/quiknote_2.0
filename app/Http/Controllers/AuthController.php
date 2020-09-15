<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
  public function index()
  {
      return view('login');
  }

  public function register()
  {
      return view('register');
  }

  public function postLogin(Request $request)
   {
       request()->validate([
       'email' => 'required',
       'password' => 'required',
       ]);

       // $credentials = $request->only('email', 'password');
       // dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
       if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           // Authentication passed...
           return redirect()->intended('dashboard');
       }
       return Redirect::to("login")->with('error','Oops! You have entered invalid credentials');
   }


   public function postRegistration(Request $request)
    {
        request()->validate([
          'username' => 'required|regex:/^[a-zA-Z]+$/u',
          'major' => 'required|regex:/^[a-zA-Z]+$/u',
          'university' => 'required|regex:/^[a-zA-Z]+$/u',
          'email' => 'required|email|unique:users',
          'password' => 'min:6|required_with:password_confirmation|same:confirm-password',
            'confirm-password'=>'min:6'

        ]);

        $data = $request->all();

        $check = $this->create($data);

        return Redirect::to("dashboard")->with('success','Great! You have Successfully loggedin');
    }


    public function dashboard()
    {
        $notes = Note::where('user_id','=',Auth::User()->id)->paginate(6);
//        dd($notes);
      if(Auth::check()){
        return view('dashboard', compact('notes'))->with('success','Logged In successfully');
      }
      // try index
       return Redirect::to("login")->with('error','Opps! You do not have access');
    }


  public function create(array $data)
	{
	  return User::create([
      'username' => $data['username'],
      'major' => $data['major'],
	    'university' => $data['university'],
      'email' => $data['email'],
	    'password' => $data['password']
	    // 'password' => Hash::make($data['password'])
	  ]);
	}


  public function logout()
  {
        Session::flush();
        Auth::logout();
        return Redirect('login')->with('success','You have logged out Successfully.');
    }


}
