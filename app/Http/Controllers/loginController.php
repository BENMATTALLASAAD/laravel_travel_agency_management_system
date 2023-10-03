<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Else_;
use PhpParser\Node\Stmt\TryCatch;
use TheSeer\Tokenizer\Exception;

class loginController extends Controller
{
    public function show(){
        return view('login.login');
    }

    public function login(Request $request){
        $name=$request->name;
        $password=$request->password;
        $credentials=['email'=>$name,'password'=>$password];
       
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();//création d'une nouvelle session
            return redirect()->route('homePage');
            //connectewh
        }else{
            //shi haja ghalta
            return back();
        }
        
    }
    
        
          
    
}
