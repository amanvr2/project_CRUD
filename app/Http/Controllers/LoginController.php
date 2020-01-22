<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class LoginController extends Controller

{
 
 
    
    public function login(Request $req)
    {  

         $con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,'project') or die("plz check database");
        if(isset($_POST['submit']))
      {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query=mysqli_query($con,"select * from users where username='$username' and password='$password'");
        $row=mysqli_num_rows($query);
        if($row==1)
          {
       
            return view('dashboard');
        
          }
        else{
          echo"<script>alert('user and pass not valid')</script>";
            }
      }
    }
}
