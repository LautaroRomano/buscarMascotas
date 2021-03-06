<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors(['message'=>'email o password incorrectos']);
        }

        return redirect()->to(request('redirect'));
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/login');
    }
}
