<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Session;

class PartnerAuthController extends Controller
{
    public function login(){
        return view('partner.auth.login');
    }

    public function register(){
        return view('partner.auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:36'
       ]);

       $partner = Partner::create($request->all());
       return redirect('partner/login')->with('success','You successfully registerd .');
    }

    public function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:8|max:36'
        ]);
    
        $userInfo = Partner::where('email','=', $request->email)->first();
    
        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if('$request->password, $userInfo->password'){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('partner/');
    
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('partner/login');
        }
    }

    public function dashboard(){
        $data= array();
        if(Session::has('LoggedUser')){
            $data = Partner::where('id','=', Session::get('LoggedUser'))->first();
        }
        return view('partner.dashboard', compact('data'));
    }
}
