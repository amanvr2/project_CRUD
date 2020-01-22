<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{

    public function index() {
        $stud = DB::select('select * from users');
        return view('editviewfile',['stud'=>$stud]);
     }
     public function destroy($id) {
        DB::delete('delete from users where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/view-records">Click Here</a> to go back.';
     }
    
}
