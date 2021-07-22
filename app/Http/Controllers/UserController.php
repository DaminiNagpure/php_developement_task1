<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Crypt;
class UserController extends Controller
{
    //
    function getData(Request $req)
    { 
        $req->validate([
            'username'=>'required | regex:/[a-z]+/',
            'email'=>'required | email |unique:students',
            'password'=>'required |min:8 |max:10 |unique:students| regex:/[0-9]+/| regex:/[a-z]+/| regex:/[A-Z]+/| regex:/[!@#$%^&*]+/'
        ]);

           $student=new student;
           $student->username=$req->username;
           $student->email=$req->email;
           $student->password=Crypt::encrypt($req->password);
           $student->save();
           //return 'Successfully Register!';
           $students=student::where('email',$req->input('email'))->get();
           $req->Session()->put('students',$students[0]->username);
           return redirect('home');
      
          
                             
    }
    
    function loginData(Request $req)
    {   
       $students=student::where('email',$req->input('email'))->get();
        if(Crypt::decrypt($students[0]->password)==$req->input('password'))
        {
            $req->Session()->put('students',$students[0]->username);
            
         return redirect('home');
        }
        else{
            return "Invalid login,please try again";
        }


        
    }
   
}
