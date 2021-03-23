<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Rule;
use App\Models\Symptom;
use App\Models\Trouble;
use App\Models\Vrule;
use App\Models\Result;

class SiteController extends Controller
{
    public function home(){
        return view('sites.home');
    }
    public function login(){
        return view('auths.login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/loginn')->with('status','You have been logout');
    }
    public function dashboard(){
        $symptom = Symptom::all()->count();
        $trouble = Trouble::all()->count();
        $rule = Vrule::all()->count();
        $history = Result::all()->count();

        return view('sites.dashboard', compact('symptom','trouble','rule','history'));
    }
    public function postlogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard')->with('status','You have been successfully login as Admin');
        }
        return redirect('/loginn')->with('error','The email or password you entered is wrong!');
    }
}
    