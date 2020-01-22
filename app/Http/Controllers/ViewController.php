<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
    public function view() {

        
        $stud = DB::select('select * from users');
        return view('viewfile',['stud'=>$stud]);
     }
}
