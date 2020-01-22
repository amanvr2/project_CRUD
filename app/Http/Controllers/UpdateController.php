<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
 

   public function index() {
      $stud = DB::select('select * from users');
      return view('editviewfile',['stud'=>$stud]);
   }
   public function show($id) {
      $stud = DB::select('select * from users where id = ?',[$id]);
      return view('update',['stud'=>$stud]);
   }
   public function edit(Request $request,$id) {
      $firstname = $request->input('firstname');
      DB::update('update users set firstname = ? where id = ?',[$firstname,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/view-records">Click Here</a> to go back.';
   }
}

