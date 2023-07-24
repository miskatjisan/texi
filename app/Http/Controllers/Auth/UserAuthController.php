<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Str;
use Auth;

class UserAuthController extends Controller
{
  
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function login()
    {
        return view('client.auth.signin');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('client.auth.signup');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'fname' => 'required',
            'countrycode' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);
           
        $data = $request->all();
     
        $check = $this->create($data);
    
         
        return redirect('login')->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('client.index');

        // if(Auth::check()){
        //     return view('client.index');
        // }
  
        // return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'fname' => $data['fname'],
        'countrycode' => $data['countrycode'],
        'phone' => $data['phone'],
        'city' => $data['city'],
     
      ]);
   
      
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
   
}
