<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    

    public function register(){
    	return views('register');
    }

     public function postRegister(){

          $this->validate($request,[

           'email'     => 'required|email',
            '' ]);

     	
    }
}
