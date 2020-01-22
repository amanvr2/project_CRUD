<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }

    public function validateform(Request $request) {
        print_r($request->all());
        $this->validate($request,[
            'firstname'=>'required|Alpha',
            'lastname'=>'required|Alpha',
           'username'=>'required|max:20',
           'password'=>'required|min:8'
        ]);
    }
    
    public function insert(Request $req)
    {  

        $firstname= $req->input('firstname');
        $lastname= $req->input('lastname');
        $username= $req->input('username');
        $password= $req->input('password');
       
      
        $data = array('firstname'=>$firstname,'lastname'=>$lastname,'username'=>$username,'password'=>$password);
        
        DB::table('users')->insert($data);

        echo '<script type="text/javascript">alert("Details Submitted");</script>';
    }

    
}
