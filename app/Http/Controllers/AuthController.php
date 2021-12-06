<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequestAdmin;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    // ----------- WEB -----------

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function signInAdmin(SignInRequestAdmin $request):  \Illuminate\Http\RedirectResponse
    {
        //dd('ok');
        if(!Auth::attempt($request->only('email', 'password')) || Auth::user()->type != 'admin'){
            return redirect()->back()->with(['error' => 'Invalid Response']);
        }

        return redirect()->route('dashboard');
    }

    public function authPage(){
        if(Auth::user() != null){
            return redirect()->route('dashboard');
        }
        return view('pages.signin_page');
    }

    public function signOutAdmin(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }


}
